@extends('layouts.app')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-title">
          <h3>Create Customer</h3>
        </div>
      </div>
        <form action="{{ route('customer.store') }}" method="POST">
          {{ csrf_field() }}
            <div class="row main">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('cu_name') ? ' has-error' : '' }}">
                        <label for="cu_name" class="cols-sm-2 control-label">Customer Name </label>
                        <div class="cols-sm-10">
                            <input type="text" name="cu_name" id="cu_name" class="form-control"  placeholder="Customer Name ..." required=""/>
                          <small class="text-danger">{{ $errors->first('cu_name') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('cu_phone') ? ' has-error' : '' }}">
                        <label for="cu_phone" class="cols-sm-2 control-label">Customer Phone</label>
                        <div class="cols-sm-10">
                            <input type="text" name="cu_phone" id="cu_phone" class="form-control"  placeholder="Phone ..." required=""/>
                          <small class="text-danger">{{ $errors->first('cu_phone') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('cu_email') ? ' has-error' : '' }}">
                        <label for="cu_email" class="cols-sm-2 control-label">Customer Email</label>
                        <div class="cols-sm-10">
                            <input type="email" name="cu_email" id="cu_email" class="form-control"  placeholder="Email ..." required=""/>
                          <small class="text-danger">{{ $errors->first('cu_email') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('cu_address') ? ' has-error' : '' }}">
                        <label for="cu_address" class="cols-sm-2 control-label">Customer Address</label>
                        <div class="cols-sm-10">
                        <textarea name="cu_address" id="cu_address" class="form-control height-t"  placeholder="Address ..." required=""></textarea>
                          <small class="text-danger">{{ $errors->first('cu_address') }}</small>
                         </div>
                    </div>
                </div>
            </div>
            <div class="form-group btn-submit">
              <input type="submit"  value="Submit" class="btn btn-success">
              <a href="{{ URL::route('customer.index') }}" class="btn btn-warning btn-responsive">Cancel</a>
            </div>
        </form>
    </div>
  </div>
@endsection