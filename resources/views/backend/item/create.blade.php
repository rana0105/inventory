@extends('layouts.app')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-title">
          <h3>Create Item</h3>
        </div>
      </div>
        <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data" files="true">
          {{ csrf_field() }}
            <div class="row main">
                <div class="col-xs-12 col-sm-10 col-md-6">
                    <div class="form-group {{ $errors->has('it_name') ? ' has-error' : '' }}">
                        <label for="it_name" class="cols-sm-2 control-label">Item Name </label>
                        <div class="cols-sm-10">
                            <input type="text" name="it_name" id="it_name" class="form-control"  placeholder="Item Name ..." required=""/>
                          <small class="text-danger">{{ $errors->first('it_name') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6">
                    <div class="form-group {{ $errors->has('it_barcode') ? ' has-error' : '' }}">
                        <label for="it_barcode" class="cols-sm-2 control-label">Barcode</label>
                        <div class="cols-sm-10">
                            <input type="text" name="it_barcode" id="it_barcode" class="form-control"  placeholder="Barcode ..." required=""/>
                          <small class="text-danger">{{ $errors->first('it_barcode') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6">
                    <div class="form-group {{ $errors->has('itpc_id') ? ' has-error' : '' }}">
                        <label for="itpc_id" class="cols-sm-2 control-label">Parent Category</label>
                        <div class="cols-sm-10">
                            <select class="form-control" name="itpc_id" required="">
                                <option value="0" disabled="true" selected="ture">--Select--</option>
                                @foreach($parentc as $pa)
                                    <option value="{{ $pa->id }}">{{ $pa->name }}
                                    </option>
                                @endforeach
                            </select> 
                          <small class="text-danger">{{ $errors->first('itpc_id') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6">
                    <div class="form-group {{ $errors->has('itsub_id') ? ' has-error' : '' }}">
                        <label for="itsub_id" class="cols-sm-2 control-label">Sub Category</label>
                        <div class="cols-sm-10">
                          <select class="form-control" name="itsub_id" required="">
                            <option value="0" disabled="true" selected="ture">--Select--</option>
                              @foreach($subc as $su)
                                  <option value="{{ $su->id }}">{{ $su->name }}
                                  </option>
                              @endforeach
                          </select>
                        <small class="text-danger">{{ $errors->first('itsub_id') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6">
                    <div class="form-group {{ $errors->has('it_descrip') ? ' has-error' : '' }}">
                        <label for="it_descrip" class="cols-sm-2 control-label">Description</label>
                        <div class="cols-sm-10">
                        <textarea name="it_descrip" id="it_descrip" class="form-control height-t"  placeholder="Description ..." required=""></textarea>
                          <small class="text-danger">{{ $errors->first('it_descrip') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6">
                    <div class="form-group {{ $errors->has('it_image') ? ' has-error' : '' }}">
                        <label for="it_image" class="cols-sm-2 control-label">Picture</label>
                        <div class="cols-sm-10">
                            <input type="file" name="it_image" id="it_image" class="form-control"  placeholder="Picture ..." required=""/>
                          <small class="text-danger">{{ $errors->first('it_image') }}</small>
                         </div>
                    </div>
                </div>
            </div>
            <div class="form-group btn-bot">
              <input type="submit"  value="Submit" class="btn btn-success">
              <a href="{{ URL::route('item.index') }}" class="btn btn-warning btn-responsive">Cancel</a>
            </div>
        </form>
    </div>
  </div>
@endsection