@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Create Warehouse</h3>
				</div>
			</div>
        <form action="{{ route('warehouse.store') }}" method="POST">
					{{ csrf_field() }}
            <div class="row main">
                <div class="col-xs-12 col-sm-10 col-md-6">
                    <div class="form-group {{ $errors->has('w_name') ? ' has-error' : '' }}">
                        <label for="w_name" class="cols-sm-2 control-label">Warehouse Name </label>
                        <div class="cols-sm-10">
                            <input type="text" name="w_name" id="w_name" class="form-control"  placeholder="Warehouse Name ..." required=""/>
                          <small class="text-danger">{{ $errors->first('w_name') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6">
                    <div class="form-group {{ $errors->has('w_location') ? ' has-error' : '' }}">
                        <label for="w_location" class="cols-sm-2 control-label">Warehouse Location</label>
                        <div class="cols-sm-10">
                            <input type="text" name="w_location" id="w_location" class="form-control"  placeholder="Location ..." required=""/>
                          <small class="text-danger">{{ $errors->first('w_location') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6">
                    <div class="form-group">
                        <label for="w_status">Status <span class="required">*</span></label>
                        <br />
                        <input id="w_status" name="w_status" type="radio" class="" value="1"  />
                        <label for="w_status" class="">Active</label>

                        <input id="w_status" name="w_status" type="radio" class="" value="0"  />
                        <label for="w_status" class="">Inactive</label>
                    </div>
                </div>
            </div>
            <div class="form-group btn-bot">
  						<input type="submit"  value="Submit" class="btn btn-success">
  						<a href="{{ URL::route('warehouse.index') }}" class="btn btn-warning btn-responsive">Cancel</a>
  					</div>
        </form>
		</div>
	</div>
@endsection