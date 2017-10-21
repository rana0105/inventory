@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Create Sub Category</h3>
				</div>
			</div>
        <form action="{{ url('subcategory') }}" method="POST">
			{{ csrf_field() }}
            <div class="row main">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="pc_name" class="cols-sm-2 control-label">Parent Category</label>
                        <div class="cols-sm-10">
                            <select class="form-control livesearch" name="name" required="">
                                <option value="0" disabled="true" selected="ture">--Select--</option>
                                @foreach($parent as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }}
                                    </option>
                                @endforeach
                            </select> 
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('subc_name') ? ' has-error' : '' }}">
                        <label for="subc_name" class="cols-sm-2 control-label">Sub Category Name</label>
                        <div class="cols-sm-10">
                            <input type="text" name="subc_name" id="subc_name" class="form-control"  placeholder="Sub Category Name..." required=""/>
                          <small class="text-danger">{{ $errors->first('subc_name') }}</small>
                         </div>
                    </div>
                </div>
            </div>
            <div class="form-group btn-submit">
      				<input type="submit"  value="Submit" class="btn btn-success">
      				<a href="{{ url('subcategory') }}" class="btn btn-warning btn-responsive">Cancel</a>
      			</div>
        </form>
		</div>
	</div>
@endsection