@extends('layouts.app')

@section('content')
	<div class="col-md-10 col-md-offset-1">
		<div class="panel">
			<div class="panel-title">
					<h3>Customer</h3>
			</div>
			<header class="panel-heading">
					<a href="{{ URL::route('customer.create') }}" class="btn btn-main-inv">Create Customer</a>
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
						<th>Phone</th>
						<th>Email</th>
						<th>Address</th>
						<th class="text-align-center">Action</th>
					</thead>

					<tbody>
						@foreach($customers as $cu)
							<tr>
								<td>{{ $cu->cu_name }}</td>
								<td>{{ $cu->cu_phone }}</td>
								<td>{{ $cu->cu_email }}</td>
								<td>{{ $cu->cu_address }}</td>
								<td>
									<a href="{{ URL::route('customer.edit', $cu->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i>Edit</a>
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