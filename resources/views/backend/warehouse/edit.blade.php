@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Update Warehouse</h3>
				</div>
			</div>
          {!! Form::model( $ware, ['route' => ['warehouse.update', $ware->id], 'files' => true, 'method' => 'PUT']) !!}
          {{ csrf_field() }}
          <div class="row main">
              <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                      <label for="w_name" class="cols-sm-2 control-label">Warehouse Name</label>
                      <div class="cols-sm-10">
                          <input type="text" name="w_name" id="w_name" class="form-control" required="" value="{{ $ware->w_name }}" />
                        
                      </div>
                  </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                      <label for="w_location" class="cols-sm-2 control-label">Warehouse Location</label>
                      <div class="cols-sm-10">
                          <input type="text" name="w_location" id="w_location" class="form-control" required="" value="{{ $ware->w_location }}" />
                        
                      </div>
                  </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                 {{ Form::label('w_status','Status *')}} <br/>
                   @if($ware->w_status == '1')
                     {{Form::radio('w_status', '1', true, ['checked' => 'checked']) }} Active 
                     {{Form::radio('w_status', '0', false) }} Inactive
                     @else
                     {{Form::radio('w_status', '1', false) }}  Active 
                     {{Form::radio('w_status', '0', true, ['checked' => 'checked']) }} Inactive  
                   @endif
                </div>
              </div>
          </div>
          <div class="form-group btn-submit">
              <input type="submit"  value="Update" class="btn btn-success">
              <a href="{{ URL::route('warehouse.index') }}" class="btn btn-warning btn-responsive">Cancel</a>
          </div>
          {!! Form::close() !!}
		</div>
	</div>
@endsection