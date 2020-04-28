<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Banner;

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
    
    public function services()
    {
        $section1=Page::where('type_id',Page::TYPE_SERVICES)->where('section_index',Page::SECTION_INDEX_ONE)->first();
       
        $banner=Banner::where('type_id',Page::TYPE_SERVICES)->first();
        return view("frontend.services",compact(['section1','banner']));
        
        
    }
    
}
