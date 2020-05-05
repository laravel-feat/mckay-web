<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobCategory ;
use DB;
class JobController extends Controller
{
    public function index(Request $request) 
    {
         
        $models = Job::select();
        $experiance=($request->get('experiance'));
        $experiances=[];
        if(!empty( $experiance) && is_array( $experiance))
        {
            foreach($experiance as $data)
            {
                $explodedData=explode("_",$data);
                $experiances=array_merge($experiances,range($explodedData[0],$explodedData[1]));
                 
            }
            $experiances=array_unique($experiances);
        }
      
        if($request->has('keyword'))
        {
            
            $models->where('title', 'like', '%'.$request->get('keyword').'%');

        }


        if($request->has('category'))
        {
            if(!empty($request->get('category')))
            $models->where('category_id',$request->get('category'));

        }


        
        if($request->has('location'))
        {
            $models->where('address', 'like', '%'.$request->get('location').'%');
            
        }


        $jobTypeModels=clone($models);

        if($request->has('job_type'))
        {
            if(!empty($request->get('job_type')))
            $models->whereIn('type_id',$request->get('job_type'));

        }


        $experianceModels=clone($models);

        if(!empty( $experiances))
        {
            $models->whereIn('experiance',$experiances);
            $jobTypeModels->whereIn('experiance',$experiances);
        }

        $jobTypeCount=$jobTypeModels->select('type_id', DB::raw('count(*) as total'))
        ->groupBy('type_id')->pluck('total','type_id')->all();

        $experianceCount=$experianceModels->select('experiance', DB::raw('count(*) as total'))
        ->groupBy('experiance')->pluck('total','experiance')->all();

     //   dd($experianceCount);
 

        $models=$models->latest()->paginate(20); 
        $jobCategories=JobCategory::pluck('title','id')->all() ;
        
        $jobTypes=Job::getTypes();

        return view('frontend.job.index',['jobTypeCount'=>$jobTypeCount,'experianceCount'=>$experianceCount,'models'=>$models,'jobCategories'=>$jobCategories,'jobTypes'=>$jobTypes]); 
    }

    public function view(Job $model) 
    {
        return view('frontend.job.view',['model'=>$model]); 
    }

}
