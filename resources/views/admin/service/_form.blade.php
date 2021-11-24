<?php
use App\Models\Banner;
?>

@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
<form method="post" action="{{$path}}" enctype="multipart/form-data">
	@csrf


	<div class="form-group">
		<label for="company" class=" form-control-label">Title</label> <input
			type="text" value="{{old('title',optional(@$model)->title)}}"
			name="title" placeholder="Enter Title" class="form-control"> <span
			class="help-block is-invalid">{{$errors->first('title')}}</span>
	</div>


	<div class="form-group">
		<label for="company" class=" form-control-label">Icon Class</label> <input
			type="text" value="{{old('icon',optional(@$model)->icon)}}"
			name="icon" placeholder="Enter Title" class="form-control"> <span
			class="help-block is-invalid">{{$errors->first('icon')}}</span>
	</div>



	<div class="form-group">
		<label for="company" class=" form-control-label">Show on Homepage</label> 
		<input name="show_on_homepage"  value="0" type="hidden"/>
		
		<input {{(old('title',optional(@$model)->show_on_homepage))?'checked':''}} type="checkbox"   name="show_on_homepage" value="1" class=" "> <span
			class="help-block is-invalid">{{$errors->first('show_on_homepage')}}</span>
	</div>
	
	
	<div class="form-group">
		<label for="company" class=" form-control-label">Show on Service Page</label>
			<input name="show_on_service_page"  value="0" type="hidden"/>
		 <input {{(old('title',optional(@$model)->show_on_service_page))?'checked':''}} type="checkbox"   name="show_on_service_page" value="1" class=""> <span
			class="help-block is-invalid">{{$errors->first('show_on_service_page')}}</span>
	</div>
	
		

 



	<div class=" form-group">
		<label for="textarea-input" class=" form-control-label">Description</label>
		<div>
			<textarea name="description" id="textarea-input" rows="9"
				placeholder="Content..." class="form-control">{{old('description',optional(@$model)->description)}}</textarea>
		</div>

		<span class="help-block is-invalid">{{$errors->first('description')}}</span>

	</div>

	<div class="row form-group">
		@if(isset($model) && !empty($model->image_path)) <img src="{{asset("public/uploads/{$model->image_path}")}}"
		width="150px"/>
		
		 @endif

		<div class="col col-md-3">
			<label for="file-input" class=" form-control-label">Image</label>

		</div>
		<div class="col-12 col-md-9">
			<input name="service_image" type="file" id="file-input"
				name="file-input" class="form-control-file"> <span
				class="help-block is-invalid">{{$errors->first('service_image')}}</span>

		</div>
	</div>

	<div class="form-actions form-group">
		<button type="submit" class="btn btn-primary btn-sm">Submit</button>
	</div>

</form>
