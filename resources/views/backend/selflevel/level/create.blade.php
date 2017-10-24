@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Create Level Number</h3>
				</div>
			</div>
        <form action="{{ url('levels') }}" method="POST">
			{{ csrf_field() }}
            <div class="row main">
                <div class="col-xs-12 col-sm-10 col-md-6">
                    <div class="form-group {{ $errors->has('shelf') ? ' has-error' : '' }}">
                        <label for="shelf" class="cols-sm-2 control-label">Shelf Number</label>
                        <div class="cols-sm-10">
                            <select class="form-control livesearch" name="shelf" required="">
                                <option value="0" disabled="true" selected="ture">--Select--</option>
                                @foreach($shelfs as $s)
                                    <option value="{{ $s->id }}">{{ $s->number }}
                                    </option>
                                @endforeach
                            </select> 
                            <small class="text-danger">{{ $errors->first('shelf') }}</small>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6">
                    <div class="form-group {{ $errors->has('level') ? ' has-error' : '' }}">
                        <label for="level" class="cols-sm-2 control-label">Level Number</label>
                        <div class="cols-sm-10">
                            <input type="text" name="level" id="level" class="form-control"  placeholder="Level Number..." required=""/>
                          <small class="text-danger">{{ $errors->first('level') }}</small>
                         </div>
                    </div>
                </div>
            </div>
            <div class="form-group btn-bot">
      				<input type="submit"  value="Submit" class="btn btn-success">
      				<a href="{{ url('levels') }}" class="btn btn-warning btn-responsive">Cancel</a>
      			</div>
        </form>
		</div>
	</div>
@endsection