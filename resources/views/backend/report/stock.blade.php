@extends('layouts.app')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-title">
          <h3>Stock Report</h3>
        </div>
      </div>
        <form action="{{ url('stock-report') }}" method="POST" files="true" target="blank">
            {{ csrf_field() }}
                <div style="margin-left: 2%; margin-right: 2%;">
                    <div class="row main">
                        <div class="col-xs-12 col-sm-10 col-md-6">
                            <div class="form-group {{ $errors->has('it_name') ? ' has-error' : '' }}">
                                <label for="it_name" class="cols-sm-2 control-label">Item Name</label>
                                <div class="cols-sm-10">
                                    <select class="livesearch form-control"  name="it_name" required="required">
                                        <option value="0" disabled="trform-controlue" selected="ture">--Select--</option>
                                    @foreach($stock as $st)
                                      <option value="{{ $st->item_id }}">{{ $st->items->it_name }}
                                      </option>
                                    @endforeach
                                  </select>
                                  <small class="text-danger">{{ $errors->first('it_name') }}</small>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group  btn-bot" style="margin-left: 2%">
                        <input type="submit"  value="Submit" class="btn btn-success">
                    </div>
               </div>
        </form>
    </div>
  </div>

   <div class="col-md-8 col-md-offset-2">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-title">
        </div>
      </div>
        <form action="{{ url('stock-reportw') }}" method="POST" files="true" target="blank">
            {{ csrf_field() }}
                <div style="margin-left: 2%; margin-right: 2%;">
                    <div class="row main">
                        <div class="col-xs-12 col-sm-10 col-md-6">
                            <div class="form-group {{ $errors->has('swp_name') ? ' has-error' : '' }}">
                                <label for="swp_name" class="cols-sm-2 control-label">Warehouse</label>
                                <div class="cols-sm-10">
                                    <select class="livesearch form-control"  name="swp_name" required="required">
                                        <option value="0" disabled="trform-controlue" selected="ture">--Select--</option>
                                    @foreach($stoc as $st)
                                      <option value="{{ $st->swp_name }}">{{ $st->warehouses->w_name }}
                                      </option>
                                    @endforeach
                                  </select>
                                  <small class="text-danger">{{ $errors->first('swp_name') }}</small>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group btn-bot">
                        <input type="submit"  value="Submit" class="btn btn-success">
                    </div>
                </div>
        </form>
    </div>
  </div>
@endsection