@extends('layouts.app')

@section('content')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Update Sub Category</h3>
				</div>
			</div>
          {!! Form::model( $item, ['route' => ['item.update', $item->id], 'files' => true, 'method' => 'PUT']) !!}
          {{ csrf_field() }}
          <div class="row main">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('it_name') ? ' has-error' : '' }}">
                        <label for="it_name" class="cols-sm-2 control-label">Item Name </label>
                        <div class="cols-sm-10">
                            <input type="text" name="it_name" id="it_name" class="form-control"  value="{{ $item->it_name }}" />
                          <small class="text-danger">{{ $errors->first('it_name') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('it_barcode') ? ' has-error' : '' }}">
                        <label for="it_barcode" class="cols-sm-2 control-label">Barcode</label>
                        <div class="cols-sm-10">
                            <input type="text" name="it_barcode" id="it_barcode" class="form-control"  value="{{ $item->it_barcode }}"/>
                          <small class="text-danger">{{ $errors->first('it_barcode') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('itpc_id') ? ' has-error' : '' }}">
                        <label for="itpc_id" class="cols-sm-2 control-label">Parent Category</label>
                        <div class="cols-sm-10">
                            {{ Form::select('itpc_id', $parentc, null, ["class" => 'form-control'])}}
                          <small class="text-danger">{{ $errors->first('itpc_id') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('itsub_id') ? ' has-error' : '' }}">
                        <label for="itsub_id" class="cols-sm-2 control-label">Sub Category</label>
                        <div class="cols-sm-10">
                          {{ Form::select('itsub_id', $subc , null, ["class" => 'form-control'])}}
                        <small class="text-danger">{{ $errors->first('itsub_id') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('it_descrip') ? ' has-error' : '' }}">
                        <label for="it_descrip" class="cols-sm-2 control-label">Description</label>
                        <div class="cols-sm-10">
                        <textarea name="it_descrip" id="it_descrip" class="form-control height-t"  value="{{ $item->it_descrip }}">{{ $item->it_descrip }}</textarea>
                          <small class="text-danger">{{ $errors->first('it_descrip') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('it_image') ? ' has-error' : '' }}">
                        <label for="it_image" class="cols-sm-2 control-label">Picture</label>
                        <div class="cols-sm-10">
                            <input type="file" name="it_image" id="it_image" class="form-control"/>
                            <img src="{{asset('images/resize_images/')}}/{{ $item->it_image }}" alt="" height="50" width="50" class="img-thumbnail" style ="margin-top:7px" style="float:right">
                          <small class="text-danger">{{ $errors->first('it_image') }}</small>
                         </div>
                    </div>
                </div>
            </div>
          <div class="form-group">
              <input type="submit"  value="Update" class="btn btn-success">
              <a href="{{ url('item') }}" class="btn btn-warning btn-responsive">Cancel</a>
          </div>
          {!! Form::close() !!}
		</div>
	</div>
@endsection