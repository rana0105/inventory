@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Create Shelf  Number</h3>
				</div>
			</div>
                <form action="{{ route('shelfs.store') }}" method="POST">
					{{ csrf_field() }}
                    <div class="row main">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('shelf') ? ' has-error' : '' }}">
                                <label for="shelf" class="cols-sm-2 control-label">Shelf  Number </label>
                                <div class="cols-sm-10">
                                    <input type="text" name="shelf" id="shelf" class="form-control"  placeholder="Shelf  Number ..." required=""/>
                                  <small class="text-danger">{{ $errors->first('shelf') }}</small>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
						<input type="submit"  value="Submit" class="btn btn-success">
						<a href="{{ URL::route('shelfs.index') }}" class="btn btn-warning btn-responsive">Cancel</a>
					</div>
                </form>
		</div>
	</div>
@endsection