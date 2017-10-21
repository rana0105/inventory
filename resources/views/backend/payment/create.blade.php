@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Payment Method</h3>
				</div>
			</div>
			<div class="container">
        <form action="{{ route('payment.store') }}" method="POST">
					{{ csrf_field() }}
            <div class="row main">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group {{ $errors->has('pay_name') ? ' has-error' : '' }}">
                        <label for="pay_name" class="cols-sm-2 control-label">Payment Name </label>
                        <div class="col-sm-10">
                            <input type="text" name="pay_name" id="pay_name" class="form-control"  placeholder="Payment Name ..." required=""/>
                          <small class="text-danger">{{ $errors->first('pay_name') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="pay_status">Status <span class="required">*</span></label>
                        <br />
                        <input id="pay_status" name="pay_status" type="radio" class="" value="1"  />
                        <label for="pay_status" class="">Active</label>

                        <input id="pay_status" name="pay_status" type="radio" class="" value="0"  />
                        <label for="pay_status" class="">Inactive</label>
                    </div>
                </div>
            </div>
            <div class="form-group btn-submit">
  						<input type="submit"  value="Submit" class="btn btn-success">
  						<a href="{{ URL::route('payment.index') }}" class="btn btn-warning btn-responsive">Cancel</a>
  					</div>
        </form>
      </div>
		</div>
	</div>
@endsection