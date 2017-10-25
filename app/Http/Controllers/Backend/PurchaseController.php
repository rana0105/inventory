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
use App\Model\PurStock;
use App\Model\GenSetting;
use DB;

class PurchaseController extends Controller
{
    
    public function index()
    {
        $purchases = Purchase::all();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.purchase.index')->withPurchases($purchases)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function create()
    {
        $item = Item::all();
        // $shelfs = SelfLevel::where('shelf_id', 0)->get();
        // $levels = SelfLevel::where('shelf_id', '!=', 0)->get();
        $payment = Payment::where('pay_status', 1)->get();
        $ware = Warehouse::where('w_status', 1)->get();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.purchase.create')->withItem($item)->withPayment($payment)->withWare($ware)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
        // ->withShelfs($shelfs)->withLevels($levels)
    }

    // public function getshelflevelDrop($id){
    //     $levels = DB::table("self_levels")
    //                 ->where("shelf_id",$id)
    //                 ->pluck("number","id");
    //     return json_encode($levels);
    // }

    
    public function store(Request $request)
    {
        //dd($request->all());
        $purchase = new Purchase;

        $purchase->date = $request->date;
        // $purchase->product_id = $request->name;
        $purchase->discount = $request->discount;
        $purchase->ntotal = $request->ntotal;
        $purchase->payment = $request->payment;
        $purchase->due = $request->due;
        $quantity = $request->qtn;
        $price = $request->u_price; 
        $stotal = $request->s_total;
        if($purchase->save()){

            foreach ($request->it_name as $key => $item) {

                    $pur = new PurStock();
                    $pur->purchase_id = $purchase->id;
                    $pur->item_id = $item;
                    $pur->quantity = $quantity[$key];
                    $pur->u_price = $price[$key];
                    $pur->s_total = $stotal[$key];
                    $pur->save();

                $pstock = PurcStock::where('item_id',$item)->first();
                if($pstock){
                    $pstock->quantity += $quantity[$key];
                    $pstock->u_price = $price[$key];
                    $pstock->s_total = $stotal[$key];
                    $pstock->save();
                }else{
                    $pstock = new PurcStock();
                    $pstock->purchase_id = $purchase->id;
                    $pstock->item_id = $item;
                    $pstock->quantity = $quantity[$key];
                    $pstock->u_price = $price[$key];
                    $pstock->s_total = $stotal[$key];
                    $pstock->save();
                }
                
            }

        }
        return redirect()->route('purchase.show', $purchase->id)->with('success' , 'Data have been save!');
    }

    
    public function show($id)
    {
        $purchase = Purchase::find($id);
        //dd($purchase);
        
        $pustock = PurStock::where('purchase_id', $id)->get();
        $output = '';
        
        if(sizeof($pustock)>0){
        $output .= '<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <title>Purchase Invoice</title>
              <style>
                table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                td, th {
                    width: auto;
                    font-size: 12px;
                    border: 1px solid #000000;
                    /*border: none;*/
                    text-align: center;
                    padding-top: 4px;
                    padding-bottom:  5px;
                    margin-top: 2px;
                    margin-bottom: 2px;
                }
                input {
                    border: none;
                }

                textarea {
                    border: none;
              }
              </style>
            </head>
            <body>
                    <h2 style="text-align: center;">Purchase Invoice</h2>
                    <h4"><span>Invoice ID : ' . $purchase->id . '</span><span style="float: right;">Invoice Date : ' .  $purchase->date . '</span></h4>
                    <h4"><span>Total Amount : '. $purchase->ntotal . '</span><span style="float: right;">Total Discount : ' . $purchase->discount . '</span></h4>
                    <h4"><span>Total Payment : ' . $purchase->payment . '</span><span style="float: right;">Total Due : ' . $purchase->due . '</span></h4>

              <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Sub Total</th>
                  </tr>
                </thead>
                <tbody>';
                $i = 1;
                 foreach($pustock as $pur){
                  $output .='<tr>
                    <td>' . $i++ . '</td>
                    <td>' . $pur->items->it_name . '</td>
                    <td>' . $pur->quantity . '</td>
                    <td>' . $pur->u_price . '</td>
                    <td>' . $pur->s_total . '</td>
                  </tr>';
                }
                    
                '</tbody>
              </table>';
            '</body>
            </html>';
        }else{
            $output .='There is no data here !';
        }
       
        

        $pdf = \PDF::loadHTML($output);
        return $pdf->stream();
        // return view('backend.purchase.purchaseinvoice')->withPurchase($purchase)->withPstock($pustock);
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
