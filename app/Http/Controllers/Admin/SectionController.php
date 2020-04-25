<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
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
}
