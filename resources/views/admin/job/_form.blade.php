<?php 
use App\Models\Job;
?>
@if (count($errors) > 0)
<ul id="login-validation-errors" class="validation-errors">
    @foreach ($errors->all() as $error)
    <li style="color:red;" class="validation-error-item">{{ $error }}</li>
    @endforeach
</ul>
@endif
<form method="post" action="{{$path}}" enctype="multipart/form-data">
    @csrf


    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Title')}}</label>
        <input type="text" value="{{old('title',optional(@$model)->title)}}" name="title" placeholder="Enter Title" class="form-control">
        <span class="help-block is-invalid">{{$errors->first('title')}}</span>
    </div>

    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Category')}}</label>
        <select class="form-control" name="category_id">
            <option value="">---{{__('Select')}}---</option>
            @foreach($jobCategories as $key=> $jobCategory)
                <option value="{{$key}}" {{(old('category',optional(@$model)->category_id)==$key)?'selected':''}}>{{$jobCategory}}</option>
            @endforeach
        </select>
        
        <span class="help-block is-invalid">{{$errors->first('category_id')}}</span>
    </div>


    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Job Type')}}</label>
        <select class="form-control" name="type_id">
            <option value="">---{{__('Select')}}---</option>
            @foreach(Job::getTypes() as $key=>$type)
                <option value="{{$key}}" {{(old('type_id',optional(@$model)->type_id)==$key)?'selected':''}}>{{$type}}</option>
            @endforeach
        </select>
        
        <span class="help-block is-invalid">{{$errors->first('title')}}</span>
    </div>




    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Short Description')}}</label>
        <textarea   name="short_desc"   class="form-control">{{old('short_desc',optional(@$model)->short_desc)}}</textarea>
       
        <span class="help-block is-invalid">{{$errors->first('short_desc')}}</span>
    </div>




    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Address')}}</label>
        <input type="text" value="{{old('address',optional(@$model)->address)}}" name="address"   class="form-control">
        <span class="help-block is-invalid">{{$errors->first('address')}}</span>
    </div>

    


    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Company Name')}}</label>
        <input type="text" value="{{old('company_name',optional(@$model)->company_name)}}" name="company_name"   class="form-control">
        <span class="help-block is-invalid">{{$errors->first('company_name')}}</span>
    </div>

    
    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Company Logo')}}</label>
        <input type="file"  name="company_logo"   class="form-control">
        @if(!empty($model->company_logo))
    <img width="120px" src="{{$model->getCompanyLogo()}}"/>
        @endif
        <span class="help-block is-invalid">{{$errors->first('company_logo')}}</span>
    </div>



    
    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Job Description')}}</label>
        <textarea  id="desc" name="desc"   class="form-control">{{old('desc',optional(@$model)->desc)}}</textarea>
       
        <span class="help-block is-invalid">{{$errors->first('desc')}}</span>
    </div>


    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Education + Experiance')}}</label>
        <textarea  id="desc" name="education_desc"   class="form-control">{{old('education_desc',optional(@$model)->education_desc)}}</textarea>
       
        <span class="help-block is-invalid">{{$errors->first('education_desc')}}</span>
    </div>


    
    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Required Knowledge')}}</label>
        <textarea  id="desc" name="required_knowledge_desc"   class="form-control">{{old('required_knowledge_desc',optional(@$model)->required_knowledge_desc)}}</textarea>
       
        <span class="help-block is-invalid">{{$errors->first('required_knowledge_desc')}}</span>
    </div>


    
    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Company Overview')}}</label>
        <textarea  id="company_overview" name="company_overview"   class="form-control">{{old('company_overview',optional(@$model)->company_overview)}}</textarea>
       
        <span class="help-block is-invalid">{{$errors->first('company_overview')}}</span>
    </div>

 

    
    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Contact Number')}}</label>
        <input type="text" value="{{old('contact_number',optional(@$model)->contact_number)}}" name="contact_number"   class="form-control">
        <span class="help-block is-invalid">{{$errors->first('contact_number')}}</span>
    </div>

    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Contact Email')}}</label>
        <input type="email" value="{{old('contact_email',optional(@$model)->contact_email)}}" name="contact_email"   class="form-control">
        <span class="help-block is-invalid">{{$errors->first('contact_email')}}</span>
    </div>



    
    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Skype Username')}}</label>
        <input type="text" value="{{old('skype_username',optional(@$model)->skype_username)}}" name="skype_username"   class="form-control">
        <span class="help-block is-invalid">{{$errors->first('skype_username')}}</span>
    </div>


    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Job Rating')}}</label>
        <input type="number" value="{{old('job_rating',optional(@$model)->job_rating)}}" name="job_rating"   class="form-control">
        <span class="help-block is-invalid">{{$errors->first('job_rating')}}</span>
    </div>


    
    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Salary From')}}</label>
        <input type="number" value="{{old('salary_from',optional(@$model)->salary_from)}}" name="salary_from"   class="form-control">
        <span class="help-block is-invalid">{{$errors->first('salary_from')}}</span>
    </div>



    
    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Salary To')}}</label>
        <input type="number" value="{{old('salary_to',optional(@$model)->salary_to)}}" name="salary_to"   class="form-control">
        <span class="help-block is-invalid">{{$errors->first('salary_to')}}</span>
    </div>



    
    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Experiance')}}</label>
        <input type="number" value="{{old('experiance',optional(@$model)->experiance)}}" name="experiance"   class="form-control">
        <span class="help-block is-invalid">{{$errors->first('experiance')}}</span>
    </div>
    



    
    <div class="form-group">
        <label for="company" class=" form-control-label">{{__('Qualification')}}</label>
        <input type="text" value="{{old('qualification',optional(@$model)->qualification)}}" name="qualification"   class="form-control">
        <span class="help-block is-invalid">{{$errors->first('qualification')}}</span>
    </div>



    <div class="form-actions form-group">
        <button type="submit" class="btn btn-primary btn-sm">{{__('Submit')}}</button>
    </div>

</form>
@section("additional_scripts")

@include('includes.ckeditor',['ckFieldName'=>'education_desc']) 
@include('includes.ckeditor',['ckFieldName'=>'desc'])
@include('includes.ckeditor',['ckFieldName'=>'company_overview'])

@include('includes.ckeditor',['ckFieldName'=>'required_knowledge_desc'])

@endsection