<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    
    public function storeServicesSection(Request $request, $section_index)
    {
        $model = Page::where([
            'type_id' => Page::TYPE_SERVICES
        ])->where([
            'section_index' => $section_index
        ])->first();
        
        if(empty($model))
        {
            $model = new Page();
            $model->type_id = Page::TYPE_SERVICES;
            
        }
        
        
        $model->section_index = $section_index;
        $model->html=$request->get("html");
        $model->created_by = Auth::user()->id;
        
        $model->save();
        
        return redirect()->back()->withSuccess("Section $section_index Updated Successfuly!!!");
    }
    
    public function servicesSection($section_index)
    {
        $page=Page::where(['section_index'=>$section_index])->where(['type_id'=>Page::TYPE_SERVICES])->first();
        return view('admin.services.section')->with(compact('section_index','page'));
    }
    
    public function storeHomepageSection(Request $request, $section_index)
    {
        $model = Page::where([
            'type_id' => Page::TYPE_HOMEPAGE
        ])->where([
            'section_index' => $section_index
        ])->first();
        
        if(empty($model))
        {
            $model = new Page();
            $model->type_id = Page::TYPE_HOMEPAGE;
            
        }
        
        
        $model->section_index = $section_index;
        $model->html=$request->get("html");
        $model->created_by = Auth::user()->id;
        
        $model->save();
        
        return redirect()->back()->withSuccess("Section $section_index Updated Successfuly!!!");
    }
    
    public function homepageSection($section_index)
    {
        $page=Page::where(['section_index'=>$section_index])->where(['type_id'=>Page::TYPE_HOMEPAGE])->first();
        return view('admin.homepage.section')->with(compact('section_index','page'));
    }
    
    
    public function storeAboutUsSection(Request $request, $section_index)
    {
        $model = Page::where([
            'type_id' => Page::TYPE_ABOUT_US
        ])->where([
            'section_index' => $section_index
        ])->first();

        if(empty($model))
        {
            $model = new Page();
            $model->type_id = Page::TYPE_ABOUT_US;
            
        }
        
      
        $model->section_index = $section_index;
        $model->html=$request->get("html");
        $model->created_by = Auth::user()->id;
        
        $model->save();
        
        return redirect()->back()->withSuccess("Section $section_index Updated Successfuly!!!");
    }
    
    public function aboutUsSection($section_index)
    {
        $page=Page::where(['section_index'=>$section_index])->where(['type_id'=>Page::TYPE_ABOUT_US])->first();
        return view('admin.about-us.section')->with(compact('section_index','page'));
    }
    
    
    
    public function storeTeamSection(Request $request, $section_index)
    {
        $model = Page::where([
            'type_id' => Page::TYPE_TEAM
        ])->where([
            'section_index' => $section_index
        ])->first();
        
        if(empty($model))
        {
            $model = new Page();
            $model->type_id = Page::TYPE_TEAM;
            
        }
        
        
        $model->section_index = $section_index;
        $model->html=$request->get("html");
        $model->created_by = Auth::user()->id;
        
        $model->save();
        
        return redirect()->back()->withSuccess("Section $section_index Updated Successfuly!!!");
    }
    
    public function teamSection($section_index)
    {
        $page=Page::where(['section_index'=>$section_index])->where(['type_id'=>Page::TYPE_TEAM])->first();
        return view('admin.team.section')->with(compact('section_index','page'));
    }
    
    
    
    
    public function storeContactUsSection(Request $request, $section_index)
    {
        $model = Page::where([
            'type_id' => Page::TYPE_CONTACT_US
        ])->where([
            'section_index' => $section_index
        ])->first();
        
        if(empty($model))
        {
            $model = new Page();
            $model->type_id = Page::TYPE_CONTACT_US;
            
        }
        
        
        $model->section_index = $section_index;
        $model->html=$request->get("html");
        $model->created_by = Auth::user()->id;
        
        $model->save();
        
        return redirect()->back()->withSuccess(__("Section :section_index Updated Successfuly!!!",['section_index'=>$section_index]));
    }
    
    
    public function contactUsSection($section_index)
    {
        
        
        
    }
    
    public function storeOtherInformation (Request $request)
    {
        $model= Setting::first();
        if(empty($model))
        {
            $model= new Setting();
        }
        $request->validate([
            'office_address' => 'required',
            'contact_number' => 'required',
            'contact_email' => 'required|email',
            'facebook_page_link'=>'required|url',
            'twitter_page_link'=>'required|url',
            'instagram_page_link'=>'required|url',
            
            'footer_copyright_text'  => 'required'
            
        ]);
        $data=$request->except('_token');
        
        if ($request->hasFile('site_logo')) {
            $imageName = time() . '.' . $request->site_logo->getClientOriginalExtension();
            
            $request->site_logo->move(public_path('uploads'), $imageName);
            
            $data['site_logo']=$imageName;
        }
        
       
        $model->fill($data);
        $model->save();
        
        
        return redirect()->back()->withSuccess(__('messages.setting_updated'));
        
        
        
        
    }
    
    public function otherInformation() 
    {
        $model=Setting::first();
        return view('admin.other.otherInformation')->with(['model'=>$model]);
    }
    
    
}
