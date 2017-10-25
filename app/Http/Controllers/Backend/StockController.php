<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Item;
use App\Model\Category;
use App\Model\Payment;
use App\Model\Warehouse;
use App\Model\SelfLevel;
use App\Model\Stock;
use App\Model\Purchase;
use App\Model\PurcStock;
use App\Model\GenSetting;
use DB;


class StockController extends Controller
{
    
    public function index()
    {
        $stocks = Stock::all();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.stock.index')->withStocks($stocks)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function create()
    {
        $item = PurcStock::where('item_id', '!=', null)->get();
        $itemq = PurcStock::where('item_id', '!=', null)->get();
        $itemup = PurcStock::where('item_id', '!=', null)->get();
        $shelfs = SelfLevel::where('shelf_id', 0)->get();
        $levels = SelfLevel::where('shelf_id', '!=', 0)->get();
        $payment = Payment::where('pay_status', 1)->get();
        $ware = Warehouse::where('w_status', 1)->get();


        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.stock.create')->withItem($item)->withItemq($itemq)->withItemup($itemup)->withShelfs($shelfs)->withLevels($levels)->withPayment($payment)->withWare($ware)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    public function getshelflevelDrop($id){
        $levels = DB::table("self_levels")
                    ->where("shelf_id",$id)
                    ->pluck("number","id");
        return json_encode($levels);
    }

    public function getitemquantityDrop($id){
        $itemq = DB::table("purc_stocks")
                    ->where("item_id",$id)
                    ->pluck("quantity","item_id");
        return json_encode($itemq);
    }

    public function getquantitypriceDrop($id){
        $itemup = DB::table("purc_stocks")
                    ->where("item_id",$id)
                    ->pluck("u_price","item_id");
        return json_encode($itemup);
    }

    
    public function store(Request $request)
    {
        //dd($request->all());

        $quantity = $request->s_quantity;
        $swpn= $request->swp_name;
        $swps = $request->swp_shelf;
        $swpl = $request->swp_level;
        $supri = $request->u_price;

        // foreach ($request->item_id as $key => $item) {
            $stock = Stock::where('item_id',$request->item_id)->first();
            
            // $stock = Stock::where('item_id',$request->item_id)->where('swp_name',$request->item_id)->where('swp_shelf',$request->item_id)->where('swp_level',$request->item_id)->first();

            if($stock){
                
                $stock->quantity += $quantity;
                $stock->u_price = $supri;

                $stock->save();

            }else{
                $stock = new Stock;
                $stock->item_id = $request->item_id;
                $stock->swp_name = $swpn;
                $stock->swp_shelf = $swps;
                $stock->swp_level = $swpl;
                $stock->quantity = $quantity;
                $stock->u_price = $supri;

                $stock->save();
            }

            $pstock = PurcStock::where('item_id',$request->item_id)->first();

                if($pstock){
                    $pstock->quantity -= $quantity;
                    $pstock->save();
                }
        // }
        
        return redirect()->route('stock.index')->with('success' , 'Data have been save!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
