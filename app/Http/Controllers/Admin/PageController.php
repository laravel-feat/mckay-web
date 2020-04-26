<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Page;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function manage()
    {
        return view('admin.homepage.sectionOne');
    }

    public function storeHomepageSectionOne(Request $request)
    {
        
        echo "<pre/>";
        $subsection =($request->get('subsection')); 
        
        
       $allRequest = $request->all(); 
    
        
       if(!empty($allRequest['subsection']))
           foreach($allRequest['subsection'] as $key=>$data)
           {
            
               if(isset($data['image']) && !empty($data['image']))
               {
                   $imageName = uniqid()."_".time() . '.' . $data['image']->getClientOriginalExtension();
                   
                   $data['image']->move(public_path('uploads'), $imageName);
                    
                   
                   $subsection[$key]['image_path']=$imageName;
                  
               }
           }
       $meta=($request->get('meta'));
       print_r($subsection) ;
       
       $finalData=['meta'=>$meta,'subsection'=>$subsection];
       $model = Page::where(['type_id'=>Page::TYPE_HOMEPAGE])->first();
       if(empty($model))
       {
           $model=new Page();
           $model->type_id=Page::TYPE_HOMEPAGE;
       }
       else
       {
           $savedData= $model->getMetaData(); 
           if(!empty($savedData['subsection']) &&  !empty($finalData['subsection']))
           {
               $images=collect( $savedData['subsection'])->pluck("image_path");
               foreach($finalData['subsection'] as $key=>$data)
               {
                   if(empty($data['image_path']) && !empty($images[$key]))
                   {
                       $finalData['subsection'][$key]['image_path']=$images[$key];
                   }
                 
               }
           }
           
           
           
       }
       $model->meta_data=json_encode($finalData); 
       $model->created_by  = Auth::user()->id;
       $model->save();
       
      
       return redirect()->back()->withSuccess("Section One Updated Successfuly!!!"); 
    }
}
