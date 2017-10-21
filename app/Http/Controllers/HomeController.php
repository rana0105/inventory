<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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
use App\Model\GenSetting;
use Auth;
use DB;
use Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Purchase::select(DB::raw('date(purchases.date) as date'), DB::raw('SUM(purchases.payment) as aggregates'))->groupBy(DB::raw('date(purchases.date)'))->get();
        
      $purchases = Charts::create('line', 'highcharts')
            ->title('Purchase Statistics')
            ->elementLabel('Purchase Statistics')
            ->dimensions(550, 400)
            ->responsive(false)
            ->labels($data->pluck('date'))
            ->values($data->pluck('aggregates'));


      $data = Sale::select(DB::raw('date(sales.date) as date'), DB::raw('SUM(sales.spayment) as aggregates'))->groupBy(DB::raw('date(sales.date)'))->get();
      // dd($data);  
      $sales = Charts::create('bar', 'highcharts')
            ->title('Sale Statistics')
            ->elementLabel('Sale Statistics')
            ->dimensions(1140, 400)
            ->responsive(false)
            ->labels($data->pluck('date'))
            ->values($data->pluck('aggregates'));

      $data = Stock::select(DB::raw('date(stocks.created_at) as date'), DB::raw('SUM(stocks.quantity) as amount'))->groupBy(DB::raw('date(stocks.created_at)'))->get();
      //dd($data);
      $stocks = Charts::create('line', 'highcharts')
               ->title('Stock Statistics')
               ->elementLabel('Stock Statistics')
               ->dimensions(550, 400)
               ->responsive(false)
               ->labels($data->pluck('date'))
               ->values($data->pluck('amount'));

      $name = DB::table('gen_settings')->pluck('inven_name');
      $logo = DB::table('gen_settings')->pluck('logo');
      $copy = DB::table('gen_settings')->pluck('copy');
      $year = DB::table('gen_settings')->pluck('year');
      $currency = DB::table('gen_settings')->pluck('currency');

          return view('dashboard')->withPurchases($purchases)->withSales($sales)->withStocks($stocks)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }
}
