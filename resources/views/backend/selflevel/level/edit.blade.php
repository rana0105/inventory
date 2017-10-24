@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Update Level</h3>
				</div>
			</div>
          {!! Form::model( $level, ['url' => ['updatelevels', $level->id], 'files' => true, 'method' => 'PUT']) !!}
          {{ csrf_field() }}
          <div class="row main">
              <div class="col-xs-12 col-sm-10 col-md-6">
                  <div class="form-group {{ $errors->has('shelf_id') ? ' has-error' : '' }}">
                      <label for="shelf_id" class="cols-sm-2 control-label">Shelf Number</label>
                      <div class="cols-sm-10">
                          {{ Form::select('shelf_id', $sh , null, ["class" => 'form-control'])}}
                          <small class="text-danger">{{ $errors->first('shelf_id') }}</small>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 col-sm-10 col-md-6">
                  <div class="form-group">
                      <label for="subc_name" class="cols-sm-2 control-label">Level Number</label>
                      <div class="cols-sm-10">
                          <input type="text" name="subc_name" id="subc_name" class="form-control" required="" value="{{ $level->number }}" />
                        
                      </div>
                  </div>
              </div>
          </div>
          <div class="form-group btn-bot">
              <input type="submit"  value="Update" class="btn btn-success">
              <a href="{{ url('levels') }}" class="btn btn-warning btn-responsive">Cancel</a>
          </div>
          {!! Form::close() !!}
		</div>
	</div>
@endsection