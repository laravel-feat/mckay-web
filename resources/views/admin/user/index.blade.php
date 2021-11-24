@extends('layouts.admin')


@section('content')

<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
            <strong class="card-title">{{__('Users')}}</strong> 
        </div>
		<div class="card-body">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">{{__('Profile Image')}}</th>
						<th scope="col">{{__('Full Name')}}</th>

						<th scope="col">{{__('Email')}}</th>
						
						
						<th scope="col">{{__('Phone Number')}}</th>

						<th scope="col">{{__('Registered On')}}</th>

                        <th scope="col">{{__('Action')}}</th>
					</tr>
				</thead>
				<tbody>
					@foreach($models as $model)
					<tr>
						<th class="align-middle" scope="row">{{$model->id}}</th>
							
					<td class="align-middle"><img width="82px;" src="{{$model->getProfileImage()}}"/></td>
						<td class="align-middle">{{$model->full_name}}</td>
						<td class="align-middle">{{$model->email}}</td>
					
					<td class="align-middle">{{$model->phone_number}}</td>
					<td class="align-middle">{{$model->created_at}}</td>
					<td class="align-middle"> <a href="{{route('admin.user.chat',['model'=>$model])}}" class="btn btn-primary">Chat<i class="fa fa-commenting"></i></a></td>

					</tr>


					@endforeach

				</tbody>
			</table>

		</div>
	</div>
	{{ $models->links() }}

</div>


@endsection 