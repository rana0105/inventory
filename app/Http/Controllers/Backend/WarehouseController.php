<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Warehouse;
use App\Model\GenSetting;
use DB;

class WarehouseController extends Controller
{
    
    public function index()
    {
        $warehouses = Warehouse::all();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.warehouse.index')->withWareh($warehouses)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function create()
    {
        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.warehouse.create')->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function store(Request $request)
    {
       
       $ware = new Warehouse;

       $ware->w_name = $request->w_name;
       $ware->w_location = $request->w_location;
       $ware->w_status = $request->w_status;

       $ware->save();

       return redirect()->route('warehouse.index')->with('success', 'Data have been save!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $ware = Warehouse::find($id);

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');
        
        return view('backend.warehouse.edit')->withWare($ware)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function update(Request $request, $id)
    {
       $ware = Warehouse::find($id);

       $ware->w_name = $request->w_name;
       $ware->w_location = $request->w_location;
       $ware->w_status = $request->w_status;

       $ware->save();

       return redirect()->route('warehouse.index')->with('success', 'Data have been Updated!');
    }

    
    public function destroy($id)
    {
        //
    }
}
