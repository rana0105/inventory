@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Create Parent Category</h3>
				</div>
			</div>
                <form action="{{ route('category.store') }}" method="POST">
					{{ csrf_field() }}
                    <div class="row main">
                        <div class="col-col-xs-12 col-sm-10 col-md-6">
                            <div class="form-group {{ $errors->has('pc_name') ? ' has-error' : '' }}">
                                <label for="name" class="cols-sm-2 control-label">Parent Category Name</label>
                                <div class="cols-sm-10">
                                    <input type="text" name="name" id="name" class="form-control"  placeholder="Parent Category Name..." required=""/>
                                  <small class="text-danger">{{ $errors->first('name') }}</small>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group btn-bot">
						<input type="submit"  value="Submit" class="btn btn-success">
						<a href="{{ URL::route('category.index') }}" class="btn btn-warning btn-responsive">Cancel</a>
					</div>
                </form>
		</div>
	</div>
@endsection