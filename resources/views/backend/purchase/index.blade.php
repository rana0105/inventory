@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-title">
					<h3>Purchase</h3>
			</div>
			<header class="panel-heading">
					<a href="{{ URL::route('purchase.create') }}" class="btn btn-main-inv">Create Purchase</a>
			</header>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
						@if(session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
						@endif
					<thead>
						<th>Date</th>
						<th>Discount</th>
						<th>Total Amount</th>
						<th>Payment</th>
						<th>Due</th>
					</thead>
					<tbody>
						@foreach($purchases as $pur)
							<tr>
								<td>{{ $pur->date }}</td>
								<td>{{ $pur->discount }}</td>
								<td>{{ $pur->ntotal }}</td>
								<td>{{ $pur->payment }}</td>
								<td>{{ $pur->due }}</td>
								{{-- <td>
									<a href="{{ URL::route('warehouse.edit', $m->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i>Edit</a>
								@can('delete_procategories')
								{!! Form::open(['route' => ['procategoies.destroy', $procate->id], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ])!!}
								
								{{Form::button('<i class="glyphicon glyphicon-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger btn-responsive delete-btn'))}}
								{!! Form::close() !!}
								@endcan
								</td> --}}
							</tr>
						@endforeach 
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection