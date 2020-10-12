<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{

    public function storeBanner(Request $request)
    {
        $request->validate([

            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'type_id'=>'required|unique:banners'
        ]);

        $imageName = time() . '.' . $request->banner_image->getClientOriginalExtension();

        $request->banner_image->move(public_path('uploads'), $imageName);

        $banner = new Banner();
        $banner->title = $request->get('title');
        $banner->description = $request->get('description');
        $banner->path = $imageName;
        $banner->type_id=$request->get("type_id");
        $banner->created_by=Auth::user()->id;
        $banner->save();
        return redirect()->route('admin.banner')->withSuccess("Banner Added Successfuly");
    }
    
    public function doUpdateBanner(Banner $model,Request $request)
    {
        $request->validate([
            
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'type_id'=>"required|unique:banners,type_id,$model->id,id"
        ]);
        if ($request->hasFile('banner_image')) {
            $imageName = time() . '.' . $request->banner_image->getClientOriginalExtension();
            
            $request->banner_image->move(public_path('uploads'), $imageName);
            $model->path=$imageName;
        }
        
        $model->title = $request->get('title');
        $model->description = $request->get('description');
    
        $model->type_id=$request->get("type_id");
        
        $model->save() ;  
        return redirect()->route('admin.banner')->withSuccess("Banner Updated Successfuly");
        
        
    }
    
    public function banner()
    {
        $models = Banner::paginate();
        
        return view('admin.banner.index', ['models' => $models]);
        
        
        
    }
    
    public function updateBanner(Banner $model)
    {
        return view('admin.banner.update', ['model' => $model]);
    }
}
