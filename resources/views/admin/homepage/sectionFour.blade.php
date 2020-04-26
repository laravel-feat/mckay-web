<?php 
 
$data= optional(@$model)->getMetaData();
 

 $totalSubsecctions=Collect([0,1,2]);
 
 

?>
@extends('layouts.admin') @section('content')

<div class="animated fadeIn">


	<div class="row"></div>
	<!--/.col-->

	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<strong>Section Three</strong><small> Update</small>
			</div>
			<div class="card-body card-block">
				
 

@foreach ($errors->all() as $error)
                <li>{{ $error }}</li> @endforeach
				<form method="post" action="{{route('admin.homepage.sectionFour.post')}}"  enctype="multipart/form-data">
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
					
					<hr/>
					@foreach($totalSubsecctions->chunk(2) as $items)
					
					<div class="row">
					@foreach($items as $itemNum)
					<div class="col-md-6">
					<div class="form-group">
						<label for="company" class=" form-control-label">Title</label> <input
							type="text" value="{{old("subsection[$itemNum]['title']", optional(@$data['subsection'][$itemNum])['title'])}}"
							name="subsection[{{$itemNum}}][title]" placeholder="Enter Title" class="form-control"> <span
							class="help-block is-invalid">{{$errors->first('title')}}</span>
					</div>
 
					<div class=" form-group">
						<label for="textarea-input" class=" form-control-label">Description</label>
						<div>
							<textarea name="subsection[{{$itemNum}}][desc]" id="textarea-input" rows="9"
								placeholder="Content..." class="form-control">{{old("subsection[$itemNum][desc]",optional(@$data['subsection'][$itemNum])['desc'])}}</textarea>
						</div>

						<span class="help-block is-invalid">{{$errors->first('description')}}</span>

					</div>
					
 
					</div>
					@endforeach
				 
					
					 
					
				 
					</div>
					@endforeach
					 
					
					

					<div class="form-actions form-group">
						<button type="submit" class="btn btn-primary btn-sm">Submit</button>
					</div>

				</form>

			</div>
		</div>


	</div>

</div>
@endsection
