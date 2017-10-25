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
use PDF;

class ReportController extends Controller
{
    public function getPurchase(){

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

    	return view('backend.report.purchase')->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    public function postPurchase(Request $request){
    	$fdate = $request->fodate;
    	$tdate = $request->todate;
        $tonettotal = 0;
    	$totalpay = 0;
    	$totaldis = 0;
    	$totaldue = 0;
        $output = '';
    	$purchase = Purchase::whereBetween('date', array($fdate, $tdate))->get();

    	if(sizeof($purchase)>0){
            foreach ($purchase as $key => $value) {
                $totalpay += $value->payment;
                $totaldis += $value->discount;
                $tonettotal += $value->ntotal;
                $totaldue += $value->due;
            }
    	}

       if(sizeof($purchase)>0){
        $output .= '<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <title>Purchase Report</title>
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
                    <h2 style="text-align: center;">Purchase Report</h2>
                    <h4"><span>From Date :'  . $fdate . '</span><span style="float: right;">To Date :' . $tdate . '</span></h4>
                    <h4"><span>Total Discount : '. $totaldis . '</span><span style="float: right;">Net Total Amount : ' . $tonettotal . '</span></h4>
                    <h4"><span>Payment : ' . $totalpay . '</span><span style="float: right;">Due : ' . $totaldue . '</span></h4>

              <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Discount</th>
                    <th>Net Total</th>
                    <th>Payment</th>
                    <th>Due</th>
                  </tr>
                </thead>
                <tbody>';
                $i = 1;
                 foreach($purchase as $pur){
                  $output .='<tr>
                    <td>' . $i++ . '</td>
                    <td>' . $pur->discount . '</td>
                    <td>' . $pur->ntotal . '</td>
                    <td>' . $pur->payment . '</td>
                    <td>' . $pur->due . '</td>
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
    	// return view('backend.report.showpurchase')->withPurchase($purchase)->withFdate($fdate)->withTdate($tdate)->withTnt($tonettotal)->withTopay($totalpay)->withTodis($totaldis)->withTodue($totaldue);
    }

    public function purchasePdf(){
        $pdf = \PDF::loadView('backend.report.showpurchase');
        return $pdf->stream();
    }

    public function getSale(){

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

    	return view('backend.report.sale')->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    public function postSale(Request $request){
    	$fdate = $request->fodate;
    	$tdate = $request->todate;
    	$totalpay = 0;
        $tonettotal = 0;
    	$totaldis = 0;
    	$totaldue = 0;
        $output = '';
    	$sale = Sale::whereBetween('date', array($fdate, $tdate))->get();

    	if(sizeof($sale)>0){
            foreach ($sale as $key => $value) {
                $totalpay += $value->spayment;
                $tonettotal += $value->stotal_amount;
                $totaldis += $value->st_discount;
                $totaldue += $value->sdue;
            }
    	}

        if(sizeof($sale)>0){
        $output .= '<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <title>Sale Report</title>
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
                    <h2 style="text-align: center;">Sale Report</h2>
                    <h4"><span>From Date :'  . $fdate . '</span><span style="float: right;">To Date :' . $tdate . '</span></h4>
                    <h4"><span>Total Discount : '. $totaldis . '</span><span style="float: right;">Net Total Amount : ' . $tonettotal . '</span></h4>
                    <h4"><span>Total Payment : ' . $totalpay . '</span><span style="float: right;">Total Due : ' . $totaldue . '</span></h4>

              <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Discount</th>
                    <th>Net Total</th>
                    <th>Payment</th>
                    <th>Due</th>
                  </tr>
                </thead>
                <tbody>';
                $i = 1;
                 foreach($sale as $sa){
                  $output .='<tr>
                    <td>' . $i++ . '</td>
                    <td>' . $sa->st_discount . '</td>
                    <td>' . $sa->stotal_amount . '</td>
                    <td>' . $sa->spayment . '</td>
                    <td>' . $sa->sdue . '</td>
                  </tr>';
                }
                    
                '</tbody>
              </table>';
              
            '</body>
            </html>';
        }else{
            $output .='There is no here !';
        }
       
        

        $pdf = \PDF::loadHTML($output);
        return $pdf->stream();
    	// return view('backend.report.showsale')->withSale($sale)->withFdate($fdate)->withTdate($tdate)->withTnt($tonettotal)->withTopay($totalpay)->withTodis($totaldis)->withTodue($totaldue);
    }

    public function getStock(){
        $stock = Stock::where('item_id', '!=', null)->get();
    	$stoc = Stock::select('swp_name')->distinct()->get();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

    	return view('backend.report.stock')->withStock($stock)->withStoc($stoc)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    public function postStock(Request $request){
    	$item = $request->it_name;
    	$stock = Stock::where('item_id', $item)->get();
        $output = '';

        if(sizeof($stock)>0){
        $output .= '<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <title>Stock Report Item</title>
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
                    <h2 style="text-align: center;">Stock Report Item</h2>

              <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Item</th>
                    <th>Warehouse</th>
                    <th>Shelf No.</th>
                    <th>Level No.</th>
                    <th>Quantity/Kilo</th>
                  </tr>
                </thead>
                <tbody>';
                $i = 1;
                 foreach($stock as $st){
                  $output .='<tr>
                    <td>' . $i++ . '</td>
                    <td>' . $st->items->it_name . '</td>
                    <td>' . $st->warehouses->w_name . '</td>
                    <td>' . $st->shelfs->number . '</td>
                    <td>' . $st->levels->number . '</td>
                    <td>' . $st->quantity . '</td>
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
    	// return view('backend.report.showstock')->withStock($stock);
    }

    public function postStockw(Request $request){
    	$wname = $request->swp_name;
    	$stockw = Stock::where('swp_name', $wname)->get();
        $output = '';

        if(sizeof($stockw)>0){
        $output .= '<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <title>Stock Report Item</title>
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
                    <h2 style="text-align: center;">Stock Report Item</h2>

              <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Item</th>
                    <th>Warehouse</th>
                    <th>Shelf No.</th>
                    <th>Level No.</th>
                    <th>Quantity/Kilo</th>
                  </tr>
                </thead>
                <tbody>';
                $i = 1;
                 foreach($stockw as $stw){
                  $output .='<tr>
                    <td>' . $i++ . '</td>
                    <td>' . $stw->items->it_name . '</td>
                    <td>' . $stw->warehouses->w_name . '</td>
                    <td>' . $stw->shelfs->number . '</td>
                    <td>' . $stw->levels->number . '</td>
                    <td>' . $stw->quantity . '</td>
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

    	// return view('backend.report.showstockw')->withStockw($stockw);
    }
}
