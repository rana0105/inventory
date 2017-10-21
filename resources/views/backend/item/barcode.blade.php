@extends('layouts.app')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-title">
          <h3>Generate Barcode</h3>
        </div>
      </div>
      <div class="row">
        @foreach($barcode as $bar)
          <div class="col-md-4" style="text-align: center;">
            {!! DNS1D::getBarcodeHTML($bar, "C128",.5,33,"green") !!}
            <p>{{ $bar->items->it_name }}</p>
          </div>
       @endforeach
      </div>
       
    </div>
  </div>
@endsection

@section('content')
 <style type="text/css">
   .code {
    height: 40px !important;
   }
 </style>
@endsection