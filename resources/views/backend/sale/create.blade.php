@extends('layouts.app')

@section('content')
  <div class="col-md-12 col-md-offset-0">
    <div class="panel">
      <div class="panel-heading">
        <div class="panel-title">
          <h3>Sale Item</h3>
        </div>
      </div>
          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif
        <form action="{{ route('sale.store') }}" method="POST" files="true" target="blank">
              {{ csrf_field() }}
                    <div class="row main">
                      <div class="col-md-9">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('date') ? ' has-error' : '' }}">
                                <label for="date" class="cols-sm-2 control-label">Date</label>
                                <div class="cols-sm-10">
                                    <input type="date" name="date" id="date" class="form-control" required="" />
                                  <small class="text-danger">{{ $errors->first('date') }}</small>
                                 </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group {{ $errors->has('customer') ? ' has-error' : '' }}">
                                <label for="customer" class="cols-sm-2 control-label">Customer</label>
                                <label class="cols-sm-2 control-label" style="float: right;"><button type="button" class="btn btn-add" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i>Add</button></label>

                                <div class="cols-sm-10">
                                    <select class="livesearch form-control"  name="customer" required="true">
                                        <option value="" disabled="trform-controlue" selected="ture">--Select--</option>
                                    @foreach($customer as $cus)
                                      <option value="{{ $cus->id }}">{{ $cus->cu_name }}
                                      </option>
                                    @endforeach
                                  </select>
                                  <small class="text-danger">{{ $errors->first('customer') }}</small>
                                 </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-sm-12 table-responsive">
                             <label for="product" class="cols-sm-2 control-label lef-m">Add Product</label>
                          <table class="table table-bordered">
                            <thead>
                              <th>Product Type</th>
                              <th>Quantity/Kilo</th>
                              <th>Unit Price</th>
                              {{-- <th>PP Discount</th>
                              <th>Vat %</th> --}}
                              <th>Sub Total</th>
                              <input type="hidden" id="pros" value="{{$data}}">
                          <th style="text-align: center;"><a  class="btn btn-success btn-sm addRows"  href="javascript:void(0)" ><i class="fa fa-plus-square fa-lg" aria-hidden="true"></i></a></th>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="width: 230px;">
                                  <select class="livesearch form-control p-check" id="p-id"  name="it_name[]" >
                                        <option value="" disabled="trform-controlue" selected="ture">--Select--</option>
                                    @foreach($data as $it)
                                      <option value="{{ $it->item_id }}">{{ $it->it_name }}
                                      </option>
                                    @endforeach
                                  </select>
                                </td>
                                <td><input type="text" name="qtn[]" class="form-control qtn qtn-p"></td>
                                <td><input type="text" name="u_price[]"  class="form-control u_price"></td>
                                {{-- <td><input type="text" name="in_dis[]" class="form-control in_dis"></td>
                                <td><input type="text" name="vat[]" class="form-control vat"></td> --}}
                                <td><input type="text" name="s_total[]" class="form-control s_total"></td>
                                <td><a href="javascript:void(0)" class="btn btn-danger btn-sm remove"><i class="fa fa-times fa-lg" aria-hidden="true"></i></a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 table-responsive">
                    <h5 style="text-align: center;"><b>Total Amount</b></h5>
                      <table class="table table-bordered">
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
                <div class="form-group" style="margin-left: 2%">
                <input type="submit"  value="Submit" class="btn btn-success">
                <a href="{{ URL::route('sale.create') }}" class="btn btn-warning btn-responsive">Cancel</a>
              </div>
            </form>
    </div>
  </div>

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Customer</h4>
      </div>
      <div class="modal-body">
        <form action="{{ url('customerAdd') }}" method="POST">
          {{ csrf_field() }}
            <div class="row main">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('cu_name') ? ' has-error' : '' }}">
                        <label for="cu_name" class="cols-sm-2 control-label">Customer Name </label>
                        <div class="cols-sm-10">
                            <input type="text" name="cu_name" id="cu_name" class="form-control"  placeholder="Customer Name ..." required=""/>
                          <small class="text-danger">{{ $errors->first('cu_name') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('cu_phone') ? ' has-error' : '' }}">
                        <label for="cu_phone" class="cols-sm-2 control-label">Customer Phone</label>
                        <div class="cols-sm-10">
                            <input type="text" name="cu_phone" id="cu_phone" class="form-control"  placeholder="Phone ..." required=""/>
                          <small class="text-danger">{{ $errors->first('cu_phone') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('cu_email') ? ' has-error' : '' }}">
                        <label for="cu_email" class="cols-sm-2 control-label">Customer Email</label>
                        <div class="cols-sm-10">
                            <input type="email" name="cu_email" id="cu_email" class="form-control"  placeholder="Email ..." required=""/>
                          <small class="text-danger">{{ $errors->first('cu_email') }}</small>
                         </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group {{ $errors->has('cu_address') ? ' has-error' : '' }}">
                        <label for="cu_address" class="cols-sm-2 control-label">Customer Address</label>
                        <div class="cols-sm-10">
                        <textarea name="cu_address" id="cu_address" class="form-control height-t"  placeholder="Address ..." required=""></textarea>
                          <small class="text-danger">{{ $errors->first('cu_address') }}</small>
                         </div>
                    </div>
                </div>
            </div>
            <div class="form-group btn-submit">
              <input type="submit"  value="Submit" class="btn btn-success">
              {{-- <a href="{{ URL::route('customer.index') }}" class="btn btn-warning btn-responsive">Cancel</a> --}}
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection