<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
class JobController extends Controller
{
    public function index() 
    {
        $models = Job::paginate();

        return view('frontend.job.index',['models'=>$models]); 
    }

    public function view(Job $model) 
    {
        return view('frontend.job.view',['model'=>$model]); 
    }

}
