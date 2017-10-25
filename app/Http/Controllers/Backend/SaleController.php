<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Item;
use App\Model\Category;
use App\Model\Payment;
use App\Model\Warehouse;
use App\Model\SelfLevel;
use App\Model\Shock;
use App\Model\Purchase;
use App\Model\PurcStock;
use App\Model\Stock;
use App\Model\Customer;
use App\Model\Sale;
use App\Model\SaleInvoice;
use App\User;
use Auth;
use App\Model\GenSetting;
use DB;

class SaleController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        $item = Item::all();
        $stock = Stock::all();
        $customer = Customer::all();
        $data = Stock::join('items','items.id','=','stocks.item_id')
        ->where('stocks.quantity', '!=', null)->get();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');
        
        //dd($data);
        $payment = Payment::where('pay_status', 1)->get();
        return view('backend.sale.create')->withItem($item)->withData($data)->withCustomer($customer)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function store(Request $request)
    {
        //dd($request->all());

        $sale = new Sale;

        $sale->date = $request->date;
        $sale->customer_id = $request->customer;
        $sale->st_discount = $request->discount;
        $sale->stotal_amount = $request->ntotal;
        $sale->spayment = $request->payment;
        $sale->sdue = $request->due;
        $sale->user_id  = Auth::user()->id;
        $squantity = $request->qtn;
        $sprice = $request->u_price;
        $sstotal = $request->s_total;
        if($sale->save()){

            foreach ($request->it_name as $key => $product) {
                $sinoice = new SaleInvoice();
                $sinoice->sale_id = $sale->id;
                $sinoice->item_id = $product;
                $sinoice->s_quantity = $squantity[$key];
                $sinoice->sunit_price = $sprice[$key];
                $sinoice->sstotal = $sstotal[$key];
                $sinoice->save();

                $stock = Stock::where('item_id',$product)->first();

                if($stock){
                    $stock->quantity -= $squantity[$key];
                    $stock->save();
                }
            }

        }

        return redirect()->route('sale.show', $sale->id);
    }

    
    public function show($id)
    {
        $sale = Sale::find($id);
        
        $sinoice = SaleInvoice::where('sale_id', $id)->get();
        $output = '';
        
        if(sizeof($sinoice)>0){
        $output .= '<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <title>Sale Invoice</title>
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
                    <h2 style="text-align: center;">Sale Invoice</h2>
                    <h4"><span>Invoice ID : ' . $sale->id . '</span><span style="float: right;">Invoice Date : ' .  $sale->date . '</span></h4>
                    <h4"><span>Customer Name : '. $sale->customers->cu_name . '</span><span style="float: right;">Invoice Created By : ' . $sale->users->name . '</span></h4>
                    <h4"><span>Total Payment : ' . $sale->stotal_amount . '</span><span style="margin-left: 20%">Total Due : ' . $sale->spayment . '</span><span style="float: right;">Total Due : ' . $sale->sdue . '</span></h4>

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
                 foreach($sinoice as $si){
                  $output .='<tr>
                    <td>' . $i++ . '</td>
                    <td>' . $si->items->it_name . '</td>
                    <td>' . $si->s_quantity . '</td>
                    <td>' . $si->sunit_price . '</td>
                    <td>' . $si->sstotal . '</td>
                  </tr>';
                }
                    
                '</tbody>
              </table>';
            '</body>
            </html>';
        }else{
            $output .='There is no data found';
        }
       
        

        $pdf = \PDF::loadHTML($output);
        return $pdf->stream();

        // return view('backend.sale.saleinvoice')->withSale($sale)->withSin($sinoice);
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


    public function getcheckItem($id)
    {
        $data = Stock::where('item_id', $id)->get();

        return Response($data);
    }

    
}
