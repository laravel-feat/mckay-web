<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    
    public function index() 
    {
        
        $models = Enquiry::paginate(15);
        
        return view('admin.enquiry.index', ['models' => $models]);
    }
}
