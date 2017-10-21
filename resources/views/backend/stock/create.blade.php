@extends('layouts.app')

@section('content')
	<div class="col-md-10 col-md-offset-1">
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">
					<h3>Items Stock</h3>
				</div>
			</div>
        <form action="{{ route('stock.store') }}" method="POST">
					{{ csrf_field() }}
            <div class="row main">
                <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group {{ $errors->has('item_id') ? ' has-error' : '' }}">
                                <label for="item_id" class="cols-sm-2 control-label">Item Name</label>
                                <div class="cols-sm-10">
                                    <select class="form-control" name="item_id">
                                      <option value="0" disabled="true" selected="ture">--Select--</option>
                                      @foreach($item as $it)
                                        <option value="{{ $it->item_id }}">{{ $it->items->it_name }}
                                        </option>
                                      @endforeach
                                    </select> 
                                    <small class="text-danger">{{ $errors->first('item_id') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group {{ $errors->has('s_quantity') ? ' has-error' : '' }}">
                                <label for="s_quantity" class="cols-sm-2 control-label">Quantity</label>
                                <div class="cols-sm-10">
                                    <select class="form-control" name="s_quantity" readonly="">
                                      <option value="s_quantity" disabled="true" selected="ture">--Select--</option>
                                      {{-- @foreach($itemq as $sq)
                                        <option value="{{ $sq->id }}">{{ $sq->quantity }}
                                        </option>
                                      @endforeach --}}
                                    </select> 
                                    <small class="text-danger">{{ $errors->first('s_quantity') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group {{ $errors->has('u_price') ? ' has-error' : '' }}">
                                <label for="u_price" class="cols-sm-2 control-label">Unit Price</label>
                                <div class="cols-sm-10">
                                    <select class="form-control" name="u_price" readonly="">
                                      <option value="u_price" disabled="true" selected="ture">--Select--</option>
                                      {{-- @foreach($itemup as $up)
                                        <option value="{{ $up->id }}">{{ $up->u_price }}
                                        </option>
                                      @endforeach --}}
                                    </select> 
                                    <small class="text-danger">{{ $errors->first('u_price') }}</small>
                                </div>
                            </div>
                        </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group {{ $errors->has('swp_name') ? ' has-error' : '' }}">
                                <label for="swp_name" class="cols-sm-2 control-label">Warehouse</label>
                                <div class="cols-sm-10">
                                    <select class="form-control" name="swp_name">
                                      <option value="0" disabled="true" selected="ture">--Select--</option>
                                      @foreach($ware as $w)
                                        <option value="{{ $w->id }}">{{ $w->w_name }}
                                        </option>
                                      @endforeach
                                    </select>  
                                    <small class="text-danger">{{ $errors->first('swp_name') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group {{ $errors->has('swp_shelf') ? ' has-error' : '' }}">
                                <label for="swp_shelf" class="cols-sm-2 control-label">Shelf Number</label>
                                <div class="cols-sm-10">
                                    <select class="form-control" name="swp_shelf">
                                      <option value="0" disabled="true" selected="ture">--Select--</option>
                                      @foreach($shelfs as $shelf)
                                        <option value="{{ $shelf->id }}">{{ $shelf->number }}
                                        </option>
                                      @endforeach
                                </select> 
                                    <small class="text-danger">{{ $errors->first('swp_shelf') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group {{ $errors->has('swp_level') ? ' has-error' : '' }}">
                                <label for="swp_level" class="cols-sm-2 control-label">Level Number</label>
                                <div class="cols-sm-10">
                                    <select class="form-control" name="swp_level">
                                      <option value="0" disabled="true" selected="ture">--Select--</option>
                                      @foreach($levels as $level)
                                        <option value="{{ $level->id }}">{{ $level->number }}
                                        </option>
                                      @endforeach
                                    </select> 
                                    <small class="text-danger">{{ $errors->first('swp_level') }}</small>
                                </div>
                            </div>
                        </div>
                        
            </div>
            <div class="form-group btn-submit">
  						<input type="submit"  value="Submit" class="btn btn-success">
  						<a href="{{ URL::route('stock.index') }}" class="btn btn-warning btn-responsive">Cancel</a>
  					</div>
        </form>
		</div>
	</div>
@endsection