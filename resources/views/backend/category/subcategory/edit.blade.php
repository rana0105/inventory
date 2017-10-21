@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Update Sub Category</h3>
				</div>
			</div>
          {!! Form::model( $subc, ['url' => ['updatecategory', $subc->id], 'files' => true, 'method' => 'PUT']) !!}
          {{ csrf_field() }}
          <div class="row main">
              <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group {{ $errors->has('pc_id') ? ' has-error' : '' }}">
                      <label for="pc_id" class="cols-sm-2 control-label">Parent Category</label>
                      <div class="cols-sm-10">
                          {{ Form::select('pc_id', $pc , null, ["class" => 'form-control'])}}
                          <small class="text-danger">{{ $errors->first('pc_id') }}</small>
                      </div>
                  </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                      <label for="subc_name" class="cols-sm-2 control-label">Sub Category Name</label>
                      <div class="cols-sm-10">
                          <input type="text" name="subc_name" id="subc_name" class="form-control" required="" value="{{ $subc->name }}" />
                        
                      </div>
                  </div>
              </div>
          </div>
          <div class="form-group btn-submit">
              <input type="submit"  value="Update" class="btn btn-success">
              <a href="{{ url('subcategory') }}" class="btn btn-warning btn-responsive">Cancel</a>
          </div>
          {!! Form::close() !!}
		</div>
	</div>
@endsection