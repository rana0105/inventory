@extends('layouts.app')
{!! Charts::assets() !!}
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title qush"><b><span class="quick-s sp">Quick</span>&nbsp;<span class="short-q sp">Shortcuts</span></b>
                        </h3>
                </div></span>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                          <a href="/dashboard" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Inventory</a>
                          <a href="{{ URL::route('item.index') }}" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> <br/>Items</a>
                          {{-- @can('view_salereport') --}}
                          <a href="{{URL::route('sale.create') }}" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-signal"></span> <br/>Sale</a>
                          {{-- @endcan --}}
                          {{-- @can('view_outlet') --}}
                          <a href="{{ url('stock') }}" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Stock</a>
                          {{-- @endcan --}}
                          {{-- @can('view_users') --}}
                          <a href="{{ route('users.index') }}" class="btn btn-user btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Users</a>
                         {{--  @endcan --}}
                          {{-- @can('view_settings') --}}
                          <a href="{{ url('barcode') }}" class="btn btn-barcode btn-lg" role="button"><span class="glyphicon glyphicon-tag"></span> <br/>Barcode</a>
                          {{-- @endcan --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 35px">
      <div class="col-md-12">
        <div class="panel">
          <center>
              {!! $sales->render() !!}
          </center>
         </div>
      </div>
    </div>
    <div class="row" style="margin-bottom: 35px">
        <div class="col-md-6">
          <div class="panel">
            <center>
                {!! $purchases->render() !!}
            </center>
          </div>
       </div>
      <div class="col-md-6">
        <div class="panel">
          <center>
              {!! $stocks->render() !!}
          </center>
        </div>
      </div>
    </div>
@endsection
