@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Update Parent Category</h3>
				</div>
			</div>
          {!! Form::model( $parent, ['route' => ['category.update', $parent->id], 'files' => true, 'method' => 'PUT']) !!}
          {{ csrf_field() }}
          <div class="row main">
              <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                      <label for="name" class="cols-sm-2 control-label">Category Name</label>
                      <div class="cols-sm-10">
                          <input type="text" name="name" id="name" class="form-control" required="" value="{{ $parent->name }}" />
                        
                      </div>
                  </div>
              </div>
          </div>
          <div class="form-group">
              <input type="submit"  value="Update" class="btn btn-success">
              <a href="{{ URL::route('category.index') }}" class="btn btn-warning btn-responsive">Cancel</a>
          </div>
          {!! Form::close() !!}
		</div>
	</div>
@endsection