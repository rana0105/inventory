@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Update Payment</h3>
				</div>
			</div>
			<div class=container>
          {!! Form::model( $payment, ['route' => ['payment.update', $payment->id], 'files' => true, 'method' => 'PUT']) !!}
          {{ csrf_field() }}
          <div class="row main">
              <div class="col-xs-4 col-sm-4 col-md-4">
                  <div class="form-group">
                      <label for="pay_name" class="cols-sm-2 control-label">Payment Name</label>
                      <div class="col-sm-10">
                          <input type="text" name="pay_name" id="pay_name" class="form-control" required="" value="{{ $payment->pay_name }}" />
                        
                      </div>
                  </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                 {{ Form::label('pay_status','Status *')}} <br/>
                   @if($payment->pay_status == '1')
                     {{Form::radio('pay_status', '1', true, ['checked' => 'checked']) }} Active 
                     {{Form::radio('pay_status', '0', false) }} Inactive
                     @else
                     {{Form::radio('pay_status', '1', false) }}  Active 
                     {{Form::radio('pay_status', '0', true, ['checked' => 'checked']) }} Inactive  
                   @endif
                </div>
              </div>
          </div>
          <div class="form-group btn-submit">
              <input type="submit"  value="Update" class="btn btn-success">
              <a href="{{ URL::route('payment.index') }}" class="btn btn-warning btn-responsive">Cancel</a>
          </div>
          {!! Form::close() !!}
      </div>
		</div>
	</div>
@endsection