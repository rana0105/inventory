@extends('layouts.app')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-title">
          <h3>Sale Report</h3>
        </div>
      </div>
        <form action="{{ url('sale-report') }}" method="POST" files="true" target="blank">
              {{ csrf_field() }}
                    <div class="row main">
                      <div class="col-md-12">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
                                <label for="date" class="cols-sm-2 control-label">From Date</label>
                                <div class="cols-sm-10">
                                    <input type="date" name="fodate" id="fodate" class="form-control" required="" />
                                  <small class="text-danger">{{ $errors->first('date') }}</small>
                                 </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
                                <label for="date" class="cols-sm-2 control-label">To Date</label>
                                <div class="cols-sm-10">
                                    <input type="date" name="todate" id="todate" class="form-control" required="" />
                                  <small class="text-danger">{{ $errors->first('date') }}</small>
                                 </div>
                            </div>
                        </div>
                      </div>  
                </div>
                <div class="form-group" style="margin-left: 2%">
                <input type="submit"  value="Submit" class="btn btn-success">
              </div>
            </form>
    </div>
  </div>
@endsection