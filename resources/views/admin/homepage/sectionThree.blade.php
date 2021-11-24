<?php 
 
$data= optional(@$model)->getMetaData();
 
 
 
?>
@extends('layouts.admin') @section('content')

<div class="animated fadeIn">


	<div class="row"></div>
	<!--/.col-->

	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<strong>Section Two</strong><small> Update</small>
			</div>
			<div class="card-body card-block">
				
 

@foreach ($errors->all() as $error)
                <li>{{ $error }}</li> @endforeach
				<form method="post" action="{{route('admin.homepage.sectionThree.post')}}"  enctype="multipart/form-data">
					@csrf


					<div class="form-group">
						<label for="company" class=" form-control-label">Main Title</label> <input
							type="text" value="{{old('title',optional(@$data['meta'])['main_title'])}}"
							name="meta[main_title]" placeholder="Enter Title" class="form-control"> <span
							class="help-block is-invalid">{{$errors->first('title')}}</span>
					</div>


				 




					<div class=" form-group">
						<label for="textarea-input" class=" form-control-label">Main Description</label>
						<div>
							<textarea name="meta[main_description]" id="textarea-input" rows="9"
								placeholder="Content..." class="form-control">{{old('meta[main_description]',optional(@$data['meta'])['main_description'])}}</textarea>
						</div>

						<span class="help-block is-invalid">{{$errors->first('description')}}</span>

					</div>
					
					
			<div class=" form-group">
						<label for="textarea-input" class=" form-control-label">Button Text</label>
						<div>
							<input name="meta[button_text]" value="{{old('meta[button_text]',optional(@$data['meta'])['button_text'])}}"
								  class="form-control">
						</div>

						<span class="help-block is-invalid">{{$errors->first('meta[button_text]')}}</span>

					</div>
					
					<div class=" form-group">
						<label for="textarea-input" class=" form-control-label">Button Link</label>
						<div>
							<input name="meta[button_link]" value="{{old('meta[button_link]',optional(@$data['meta'])['button_link'])}}"
								  class="form-control">
						</div>

						<span class="help-block is-invalid">{{$errors->first('meta[button_link]')}}</span>

					</div>
					
					
					
				
					
						<div class=" form-group">
						@if(!empty( optional(@$data['meta'])['main_image'])) <img
							src="{{asset("public/uploads/".(optional(@$data['meta'])['main_image']))}}"
						width="150px"/> @endif

						<div class="col col-md-3">
							<label for="file-input" class=" form-control-label">Image </label>

						</div>
						<div class="col-12 col-md-9">
							<input name="meta[main_image]" type="file" id="file-input"
								name="file-input" class="form-control-file"> <span
								class="help-block is-invalid">{{$errors->first('service_image')}}</span>

						</div>
					</div>
					
					<hr/>
				 
					
					

					<div class="form-actions form-group">
						<button type="submit" class="btn btn-primary btn-sm">Submit</button>
					</div>

				</form>

			</div>
		</div>


	</div>

</div>
@endsection
