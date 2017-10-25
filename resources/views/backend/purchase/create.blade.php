@extends('layouts.app')

@section('content')
  <div class="col-md-12 col-md-offset-0">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-title">
          <h3>Purchase Item</h3>
        </div>
      </div>
        <form action="{{ route('purchase.store') }}" method="POST" files="true" target="blank">
              {{ csrf_field() }}
                    <div class="row main">
                      <div class="col-md-9 col-sm-9">
                        <div class="col-xs-12 col-sm-10 col-md-6">
                            <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
                                <label for="date" class="cols-sm-2 control-label">Date</label>
                                <div class="cols-sm-10">
                                    <input type="date" name="date" id="date" class="form-control"/>
                                  <small class="text-danger">{{ $errors->first('date') }}</small>
                                 </div>
                            </div>
                        </div>
<<<<<<< HEAD
=======
                        {{-- <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('wp_name') ? ' has-error' : '' }}">
                                <label for="wp_name" class="cols-sm-2 control-label">Warehouse</label>
                                <div class="cols-sm-10">
                                    <select class="form-control" name="wp_name">
                                      <option value="0" disabled="true" selected="ture">--Select--</option>
                                      @foreach($ware as $w)
                                        <option value="{{ $w->id }}">{{ $w->w_name }}
                                        </option>
                                      @endforeach
                                    </select>  
                                    <small class="text-danger">{{ $errors->first('wp_name') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('wp_shelf') ? ' has-error' : '' }}">
                                <label for="wp_shelf" class="cols-sm-2 control-label">Shelf Number</label>
                                <div class="cols-sm-10">
                                    <select class="form-control" name="wp_shelf">
                                      <option value="0" disabled="true" selected="ture">--Select--</option>
                                      @foreach($shelfs as $shelf)
                                        <option value="{{ $shelf->id }}">{{ $shelf->number }}
                                        </option>
                                      @endforeach
                                </select> 
                                    <small class="text-danger">{{ $errors->first('wp_shelf') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('wp_level') ? ' has-error' : '' }}">
                                <label for="wp_level" class="cols-sm-2 control-label">Level Number</label>
                                <div class="cols-sm-10">
                                    <select class="form-control" name="wp_level">
                                      <option value="0" disabled="true" selected="ture">--Select--</option>
                                      @foreach($levels as $level)
                                        <option value="{{ $level->id }}">{{ $level->number }}
                                        </option>
                                      @endforeach
                                    </select> 
                                    <small class="text-danger">{{ $errors->first('wp_level') }}</small>
                                </div>
                            </div>
                        </div> --}}
                  {{-- <div class="form-group"> --}}
>>>>>>> 8d6a549ec17f982689f14a3c424c6d0cf2e006de
                          <div class="col-md-12 col-sm-12 table-responsive">
                             <label for="product" class="cols-sm-2 control-label lef-m">Add Product</label>
                          <table class="table table-bordered">
                            <thead>
                              <th>Product Type</th>
                              <th>Quantity/Kilo</th>
                              <th>Unit Price</th>
<<<<<<< HEAD
=======
                              {{-- <th>PP Discount</th>
                              <th>Vat %</th> --}}
>>>>>>> 8d6a549ec17f982689f14a3c424c6d0cf2e006de
                              <th>Sub Total</th>
                              <input type="hidden" id="pro" value="{{$item}}">
                          <th style="text-align: center;"><a  class="btn btn-success btn-sm addRow"  href="javascript:void(0)" ><i class="fa fa-plus-square fa-lg" aria-hidden="true"></i></a></th>
                            </thead>
<<<<<<< HEAD
                            <tbody id="pur-width">
=======
                            <tbody>
>>>>>>> 8d6a549ec17f982689f14a3c424c6d0cf2e006de
                              <tr>
                                <td style="width: 230px;">
                                  <select class="livesearch form-control"  name="it_name[]" >
                                                  <option value="0" disabled="trform-controlue" selected="ture">--Select--</option>
                                              @foreach($item as $it)
                                                <option value="{{ $it->id }}">{{ $it->it_name }}
                                                </option>
                                              @endforeach
                                            </select>
                                </td>
                                <td><input type="text" name="qtn[]" class="form-control qtn"></td>
                                <td><input type="text" name="u_price[]" class="form-control u_price"></td>
<<<<<<< HEAD
=======
                                {{-- <td><input type="text" name="in_dis[]" class="form-control in_dis"></td>
                                <td><input type="text" name="vat[]" class="form-control vat"></td> --}}
>>>>>>> 8d6a549ec17f982689f14a3c424c6d0cf2e006de
                                <td><input type="text" name="s_total[]" class="form-control s_total"></td>
                                <td><a href="javascript:void(0)" class="btn btn-danger btn-sm remove"><i class="fa fa-times fa-lg" aria-hidden="true"></i></a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
<<<<<<< HEAD
=======
                      {{-- </div> --}}
>>>>>>> 8d6a549ec17f982689f14a3c424c6d0cf2e006de
                    </div>
                    <div class="col-md-3 col-sm-3">
                    <h5 style="text-align: center;"><b>Total Amount</b></h5>
                    <div class="table-responsive">
                      <table class="table  table-bordered">
                        <tfoot>
                      <tr>
                            <td>Total</td>
                            <td><b class="total" id="total"></b></td>
                          </tr>
                          <tr>
                            <td>Total Discount</td>
                            <td><b class="discount"><input type="text" name="discount" class="form-control discount" id="discount_input"></b></td>
                          </tr>
                          <tr>
                            <td>Net Total</td>
                            <td><input type="text" readonly="" name="ntotal" id="ntotal" value="" class="form-control ntotal"></td>
                          </tr>
                          <tr>
                            <td>Payment</td>
                            <td><b class="payment"><input type="text" name="payment" class="form-control" id="payment_input"></b></td>
                          </tr>
                          <tr>
                            <td>Due</td>
                            <td><input type="text" name="due" readonly="" class="form-control due"></td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="form-group btn-bot">
                <input type="submit"  value="Submit" class="btn btn-success">
                <a href="{{ URL::route('purchase.index') }}" class="btn btn-warning btn-responsive">Cancel</a>
              </div>
            </form>
    </div>
  </div>
@endsection