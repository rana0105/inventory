@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-title">
					<h3>Stocks</h3>
			</div>
			<header class="panel-heading">
					<a href="{{ URL::route('stock.create') }}" class="btn btn-main-inv">Create Stock</a>
			</header>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
						@if(session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
						@endif
					<thead>
						<th>Item Name</th>
						<th>Unit Price</th>
						<th>Quantity/Kilo</th>
						{{-- <th class="text-align-center">Action</th> --}}
					</thead>
					<tbody>
						@foreach($stocks as $st)
							<tr>
								<td>{{ $st->items->it_name }}</td>
								<td>{{ $st->u_price }}</td>
								<td>{{ $st->quantity }}</td>
								{{-- <td>
									<a href="{{ URL::route('payment.edit', $st->id) }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i>Edit</a>
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