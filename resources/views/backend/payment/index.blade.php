@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-title">
					<h3>Payment Method</h3>
			</div>
			<header class="panel-heading">
					<a href="{{ URL::route('payment.create') }}" class="btn btn-main-inv">Create Payment</a>
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
						<th>Status</th>
						<th class="text-align-center">Action</th>
					</thead>

					<tbody>
						@foreach($payments as $m)
							<tr>
								<td>{{ $m->pay_name }}</td>
								<td>
									@if($m->pay_status == 1)
		                               <h4 class="active">Active</h4>
			                        @endif
			                        @if($m->pay_status == 0)
			                            <h4 class="inactive">Inactive</h4>
			                        @endif
								</td>
								<td>
									<a href="{{ URL::route('payment.edit', $m->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i>Edit</a>
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