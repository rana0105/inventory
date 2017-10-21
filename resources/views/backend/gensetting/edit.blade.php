@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Update Sub Category</h3>
				</div>
			</div>
          {!! Form::model( $genset, ['route' => ['gsetting.update', $genset->id], 'files' => true, 'method' => 'PUT']) !!}
          {{ csrf_field() }}
          <div class="row main">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('inven_name') ? ' has-error' : '' }}">
                        <label for="inven_name" class="cols-sm-2 control-label">Inventory Name </label>
                        <div class="cols-sm-10">
                            <input type="text" name="inven_name" id="inven_name" class="form-control"  value="{{ $genset->inven_name }}">
                          <small class="text-danger">{{ $errors->first('inven_name') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('currency') ? ' has-error' : '' }}">
                        <label for="currency" class="cols-sm-2 control-label">Currency</label>
                        <div class="cols-sm-10">
                            <input type="text" name="currency" id="currency" class="form-control"  value="{{ $genset->currency }}"/>
                          <small class="text-danger">{{ $errors->first('currency') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('copy') ? ' has-error' : '' }}">
                        <label for="copy" class="cols-sm-2 control-label">Copy Right</label>
                        <div class="cols-sm-10">
                            <input type="text" name="copy" id="copy" class="form-control"  value="{{ $genset->copy }}"/>
                          <small class="text-danger">{{ $errors->first('copy') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('year') ? ' has-error' : '' }}">
                        <label for="year" class="cols-sm-2 control-label">Year</label>
                        <div class="cols-sm-10">
                            <input type="text" name="year" id="year" class="form-control"  value="{{ $genset->year }}"/>
                          <small class="text-danger">{{ $errors->first('year') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
                        <label for="logo" class="cols-sm-2 control-label">Logo</label>
                        <div class="cols-sm-10">
                            <input type="file" name="logo" id="logo" class="form-control"/>
                            <img src="{{asset('images/resize_images/')}}/{{ $genset->logo }}" alt="" height="50" width="50" class="img-thumbnail" style ="margin-top:7px" style="float:right">
                          <small class="text-danger">{{ $errors->first('logo') }}</small>
                         </div>
                    </div>
                </div>
            </div>
          <div class="form-group">
              <input type="submit"  value="Update" class="btn btn-success">
              <a href="{{ url('gsetting') }}" class="btn btn-warning btn-responsive">Cancel</a>
          </div>
          {!! Form::close() !!}
		</div>
	</div>
@endsection