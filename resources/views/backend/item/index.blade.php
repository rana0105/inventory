@extends('layouts.app')

@section('content')
	<div class="col-md-10 col-md-offset-1">
		<div class="panel">
			<div class="panel-title">
					<h3>Item</h3>
			</div>
			<header class="panel-heading">
					<a href="{{ URL::route('item.create') }}" class="btn btn-main-inv">Create Item</a>
			</header>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
						@if(session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
						@endif
					<thead>
						<th>Name</th>
						<th>Barcode</th>
						<th>Parent Category</th>
						<th>Sub Category</th>
						<th>Description</th>
						<th>Picture</th>
						<th class="text-align-center">Action</th>
					</thead>

					<tbody>
						@foreach($items as $it)
							<tr>
								<td>{{ $it->it_name }}</td>
								<td>{{ $it->it_barcode }}</td>
								<td>{{ $it->pcategories->name }}</td>
								<td>{{ $it->scategories->name }}</td>
								<td>{{ $it->it_descrip }}</td>
								<td>
								<img src="{{asset('images/resize_images/')}}/{{ $it->it_image }}" alt="" height="50" width="45" class="img-thumbnail">
								</td>
								<td>
									<a href="{{ URL::route('item.edit', $it->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i>Edit</a>
								{{-- @can('delete_procategories')
								{!! Form::open(['route' => ['procategoies.destroy', $procate->id], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ])!!}
								
								{{Form::button('<i class="glyphicon glyphicon-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger btn-responsive delete-btn'))}}
								{!! Form::close() !!}
								@endcan --}}
								</td>
							</tr>
						@endforeach 
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection