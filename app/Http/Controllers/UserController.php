<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Mail;
class UserController extends Controller
{
    public function storeCustomer(Request $request)
    {
       $data= $request->validate($this->getValidation()) ;

       $imageName = time() . '.' . $request->profile_image->getClientOriginalExtension();

       $request->profile_image->move(public_path('uploads'), $imageName);


       $model=new User($data) ;
       $model->role_id=User::ROLE_USER;
       $model->profile_path=$imageName ;
       $model->unique_code=Str::random(18); 
       $model->save() ; 


        Mail::send('emails.signupSuccess', ['model'=>$model], function ($m) use ($model){
            $m->from('admin@neuronsit.in', env('APP_NAME'));

            $m->to($model->email, $model->full_name)->subject(__('Signup Successful'));
        }); 



       return redirect()->back()->withSuccess(__('Your Account Created Successfuly , We Have Email you Unique Code'));
 
    }

    protected function getValidation()
    {
        return [
            'full_name'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
            'address'=>'required',
            'profile_image' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gender'=>'required',
            'qualification'=>'requierd',
            'applied_position'=>'required',
            'total_experiance'=>'required',
            'job_location'=>'required'

        ];
    }
}
