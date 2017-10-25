@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-title">
					<h3>Warehouse</h3>
			</div>
			<header class="panel-heading">
					<a href="{{ URL::route('warehouse.create') }}" class="btn btn-main-inv">Create Warehouse</a>
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
						<th>Location</th>
						<th>Status</th>
						<th class="text-align-center">Action</th>
					</thead>
					<tbody>
						@foreach($wareh as $m)
							<tr>
								<td>{{ $m->w_name }}</td>
								<td>{{ $m->w_location }}</td>
								<td>
									@if($m->w_status == 1)
		                               <h4 class="active">Active</h4>
			                        @endif
			                        @if($m->w_status == 0)
			                            <h4 class="inactive">Inactive</h4>
			                        @endif
								</td>
								<td>
									<a href="{{ URL::route('warehouse.edit', $m->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i>Edit</a>
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