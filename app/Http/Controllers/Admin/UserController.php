<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    
    public function chat(User $model) 
    {
        return view('admin.user.chat',['model'=>$model]);
    }

    public function index() 
    {
        $models=User::where("role_id",User::ROLE_USER)->paginate()  ; 
        return view('admin.user.index')->with('models',$models) ;
    }
    
    public function update(User $model) 
    {
        return view('admin.user.update',['model'=>$model]);
    }

    public function doUpdate(Request $request,User $model) 
    {
        $data=$request->validate($this->getValidation()+[ 'company_logo' =>'image|mimes:jpeg,png,jpg,gif|max:2048',]);
        
        $model->fill($data);
        if ($request->hasFile('company_logo')) {
            $imageName = time() . '.' . $request->company_logo->getClientOriginalExtension();
            
            $request->company_logo->move(public_path('uploads'), $imageName);
            $model->company_logo=$imageName;
        }
        $model->save() ;
        return redirect()->back()->withSuccess(__('Job Updated Successfuly'));
    
    }

    public function store(Request $request) 
    {
        
        $data=$request->validate($this->getValidation()+[ 'company_logo' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048']);
       // dd($data);
        $imageName = time() . '.' . $request->company_logo->getClientOriginalExtension();

        $request->company_logo->move(public_path('uploads'), $imageName);
 
        $model=new Job() ;
        $model->fill($data);
        $model->company_logo=$imageName;
        $model->save() ;
        
        return redirect()->back()->withSuccess(__('Job Added Successfuly'));

    }


    public function delete(Job $model)
    {
        $model->delete() ;

         return redirect()->back()->withSuccess(__('User Deleted Successfuly'));
    }

    protected function getValidation() 
    {
        return [
            'title'=>'required',
            'type_id'=>'required',
            'contact_number'=>'required',
            'company_name'=>'required',
            'job_rating'=>'required|numeric',
            'skype_username'=>'required',
            'address'=>'required',
            'desc'=>'required',
            'required_knowledge_desc'=>'required',
            'education_desc'=>'required',
            'company_overview'=>'required',
            'experiance'=>'required|numeric',
            'salary_from'=>'required|numeric',
            'salary_to'=>'required|numeric',
            'qualification'=>'required',
            'contact_email'=>'required|email',
            'short_desc'=>'required'
        ] ;

    }
}
