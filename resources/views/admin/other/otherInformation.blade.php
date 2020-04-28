<?php
use App\Models\Banner;
?>
@extends('layouts.admin')


@section('content')



<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<strong class="card-title">{{__('Update Information')}}</strong>
		</div>
		@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		<div class="card-body card-block">
			<form enctype='multipart/form-data'
				action="{{route('admin.other.otherInformation.post')}}"
				method="post">
				@csrf
  
  <div class="form-group">
    <label for="exampleInputEmail1">{{__('Office Address')}}</label>
    <textarea class="form-control" rows="5"  name="office_address" cols="">{{old('office_address',@optional($model)->office_address)}}</textarea>
     
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">{{__('Contact Number')}}</label>
    <input type="text" class="form-control" value="{{old('contact_number',@optional($model)->contact_number)}}" name="contact_number" aria-describedby="emailHelp">
  </div>


 <div class="form-group">
    <label for="exampleInputPassword1">{{__('Contact Email')}}</label>
    <input type="text" value="{{old('contact_email',@optional($model)->contact_email)}}" class="form-control"  name="contact_email" aria-describedby="emailHelp">
  </div>
  
  
<div class="form-group">
    <label for="exampleInputPassword1">{{__('Facebook Page Link')}}</label>
    <input type="text" value="{{old('facebook_page_link',@optional($model)->facebook_page_link)}}"  class="form-control"  name="facebook_page_link" aria-describedby="emailHelp">
  </div>
  
    
<div class="form-group">
    <label for="exampleInputPassword1">{{__('Twitter Page Link')}}</label>
    <input type="text" value="{{old('twitter_page_link',@optional($model)->twitter_page_link)}}" class="form-control"  name="twitter_page_link" aria-describedby="emailHelp">
  </div>
  
    
<div class="form-group">
    <label for="exampleInputPassword1">{{__('Instagram Page Link')}}</label>
    <input type="text" value="{{old('instagram_page_link',@optional($model)->instagram_page_link)}}"  class="form-control"  name="instagram_page_link" aria-describedby="emailHelp">
  </div>
  
  
      
<div class="form-group">
    <label for="exampleInputPassword1">{{__('Site Logo')}}</label>
    <input type="file"   class="form-control"  name="site_logo" aria-describedby="emailHelp">
  </div>
  
  @if(@optional($model)->site_logo)
  <img src="{{asset('public/uploads/'.@optional($model)->site_logo)}}"/>
  @endif
  
  
  
 <div class="form-group">
    <label for="exampleInputPassword1">{{__('Footer Copyright Text')}}</label>
    <input type="text" value="{{old('contact_number',@optional($model)->contact_number)}}" class="form-control"  name="footer_copyright_text" aria-describedby="emailHelp">
  </div>
  
  
  
  
   

				<input class="btn btn-primary" type="submit" />

			</form>
		</div>

	</div>


</div>

@endsection 
@section("additional_scripts")

 @include("includes/ckeditor")
@endsection
