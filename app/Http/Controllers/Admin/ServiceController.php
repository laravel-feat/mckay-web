<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class ServiceController extends Controller
{
    public function storeService(Request $request)
    {
        $request->validate([
            
            'service_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description'=>'required',
            
        ]);
        
        
        $service = new Service();
        if ($request->hasFile('service_image')) {
            $imageName = time() . '.' . $request->service_image->getClientOriginalExtension();
            
            $request->service_image->move(public_path('uploads'), $imageName);
            
            $service->image_path = $imageName;
        }


        $service->title = $request->get('title');
        $service->description = $request->get('description');
        $service->icon = $request->get('icon');
        $service->show_on_service_page=$request->get("show_on_service_page");
        $service->show_on_homepage=$request->get("show_on_homepage");
        $service->created_by=Auth::user()->id;
        $service->save();
        return redirect()->route('admin.service')->withSuccess("Service Added Successfuly");
    }
    
    public function doUpdateBanner(Service $model,Request $request)
    {
        $request->validate([
            
            'service_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'description'=>'required',
        ]);
         
        if ($request->hasFile('service_image')) {
            $imageName = time() . '.' . $request->service_image->getClientOriginalExtension();
            
            $request->service_image->move(public_path('uploads'), $imageName);
            
            $model->image_path = $imageName;
        }
        
        
        $model->title = $request->get('title');
        $model->description = $request->get('description');
        $model->icon = $request->get('icon');
        $model->show_on_service_page=$request->get("show_on_service_page");
        $model->show_on_homepage=$request->get("show_on_homepage");
        $model->created_by=Auth::user()->id;
        $model->save();
        return redirect()->route('admin.service')->withSuccess("Service Updated Successfuly");
        
        
    }
    
    public function index()
    {
        $models = Service::paginate();
        
        return view('admin.service.index', ['models' => $models]);
        
        
        
    }
    
    public function updateBanner(Service $model)
    {
        return view('admin.service.update', ['model' => $model]);
    }
}
