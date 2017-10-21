@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-title">
					<h3>Level Number</h3>
			</div>
			<header class="panel-heading">
					<a href="{{url('levels/create') }}" class="btn btn-main-inv">Create Level</a>
			</header>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
						@if(session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
						@endif
					<thead>
						<th>Shelf Number</th>
						<th>Level Number</th>
						<th class="text-align-center">Action</th>
					</thead>
					<tbody>
						@foreach($levels as $m)
							<tr>
								<td>{{ $m->shelf }}</td>
								<td>{{ $m->number }}</td>
								<td>
									<a href="{{url('levels/'.$m->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i>Edit</a>
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