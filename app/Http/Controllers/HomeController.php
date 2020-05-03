<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Page;
use App\Models\Banner;
use App\Models\Enquiry;
use App\Models\City;
use App\Models\Position;
class HomeController extends Controller
{
    public function index()
    {
        $section1=Page::where('type_id',Page::TYPE_HOMEPAGE)->where('section_index',Page::SECTION_INDEX_ONE)->first();
        $section2=Page::where('type_id',Page::TYPE_HOMEPAGE)->where('section_index',Page::SECTION_INDEX_TWO)->first();
        $section3=Page::where('type_id',Page::TYPE_HOMEPAGE)->where('section_index',Page::SECTION_INDEX_THREE)->first();
        $section4=Page::where('type_id',Page::TYPE_HOMEPAGE)->where('section_index',Page::SECTION_INDEX_FOUR)->first();
        
        $banner=Banner::where('type_id',Page::TYPE_HOMEPAGE)->first();
        return view("frontend.home",compact(['section1','section2','section3','section4','banner']));
    }
    
    public function customer() 
    {
        $banner=Banner::where('type_id',Page::TYPE_CUSTOMER)->first();
        $cities= City::getCities() ; 
        $positions=Position::getAll();
        return view("frontend.customer",compact(['banner','cities','positions']));
    }

    public function services()
    {
        $section1=Page::where('type_id',Page::TYPE_SERVICES)->where('section_index',Page::SECTION_INDEX_ONE)->first();
       
        $banner=Banner::where('type_id',Page::TYPE_SERVICES)->first();
        return view("frontend.services",compact(['section1','banner']));
        
        
    }
    
    public function aboutUs() 
    {
        
        $section1=Page::where('type_id',Page::TYPE_ABOUT_US)->where('section_index',Page::SECTION_INDEX_ONE)->first();
        $section2=Page::where('type_id',Page::TYPE_ABOUT_US)->where('section_index',Page::SECTION_INDEX_TWO)->first();
        $section3=Page::where('type_id',Page::TYPE_ABOUT_US)->where('section_index',Page::SECTION_INDEX_THREE)->first();
        $section4=Page::where('type_id',Page::TYPE_ABOUT_US)->where('section_index',Page::SECTION_INDEX_FOUR)->first();
        
        $banner=Banner::where('type_id',Page::TYPE_ABOUT_US)->first();
        return view("frontend.aboutUs",compact(['section1','section2','section3','section4','banner']));
        
    }
    
    
    public function team()
    {
        
        $section1=Page::where('type_id',Page::TYPE_TEAM)->where('section_index',Page::SECTION_INDEX_ONE)->first();
     
        $banner=Banner::where('type_id',Page::TYPE_TEAM)->first();
        return view("frontend.team",compact(['section1','banner']));
        
    }
    
    
    
    public function contactUs()
    {
      
        $banner=Banner::where('type_id',Page::TYPE_CONTACT_US)->first();
        return view("frontend.contactUs",compact([ 'banner']));
        
    }
    
    
    public function storeEnquiry(Request $request)
    {
        $response = [];
        $response['status']='NOK';
        $validator = Validator::make($request->all(), [
            
            'name' => 'required',
            
            'email' => 'required|email',
            
            'subject' => 'required',
            
            'message' => 'required|min:20',
            
        ]);
        
        
        
        if ($validator->passes()) {
            $response['status']='OK';
            $model=new Enquiry();
            $model->fill($request->all());
            $model->save();
            $response['status']='OK';
            return $response;
            
        }
        
        
        $response['error']=$validator->errors()->all();
        return $response;
        
    }
    
    
    
    
    
    
    
    
}
