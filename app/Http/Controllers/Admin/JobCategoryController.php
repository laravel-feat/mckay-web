<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;
class JobCategoryController extends Controller
{
    
    public function index() 
    {
        $models=JobCategory::paginate()  ; 
        return view('admin.job-category.index')->with('models',$models) ;
    }

    public function update(JobCategory $model)
    {

        return view('admin.job-category.update', ['model' => $model]);
    }

    public function doUpdate(Request $request,JobCategory $model)
    {
        $data=$request->validate($this->getValidation());
        $model->fill($data); 
        $model->save() ; 

        
        return redirect()->back()->withSuccess(__('Job Category Updated Successfuly'));
    }

    public function store (Request $request)
    {
        $data=$request->validate($this->getValidation());
        
        JobCategory::create($data);

        return redirect()->back()->withSuccess(__('Job Category Added Successfuly'));

    }

    public function delete(JobCategory $model)
    {
        $model->delete() ; 
        return redirect()->back()->withSuccess(__('Job Category Deleted Successfuly'));
    }

    protected function getValidation() 
    {
        return [
            'title'=>'required'
        ];
    }
}
