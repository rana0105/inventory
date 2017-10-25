@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Update Shelf Number</h3>
				</div>
			</div>
          {!! Form::model( $shelf, ['route' => ['shelfs.update', $shelf->id], 'files' => true, 'method' => 'PUT']) !!}
          {{ csrf_field() }}
          <div class="row main">
              <div class="col-xs-12 col-sm-10col-md-6">
                  <div class="form-group">
                      <label for="shelf" class="cols-sm-2 control-label">Shelf Name</label>
                      <div class="cols-sm-10">
                          <input type="text" name="shelf" id="shelf" class="form-control" required="" value="{{ $shelf->number }}" />
                        
                      </div>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <input type="submit"  value="Update" class="btn btn-success">
              <a href="{{ URL::route('shelfs.index') }}" class="btn btn-warning btn-responsive">Cancel</a>
          </div>
          {!! Form::close() !!}
		</div>
	</div>
@endsection