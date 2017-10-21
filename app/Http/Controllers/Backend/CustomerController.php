<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Customer;
use App\Model\GenSetting;
use DB;

class CustomerController extends Controller
{
    
    public function index()
    {
        $customers = Customer::all();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.customer.index')->withCustomers($customers)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function create()
    {

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.customer.create')->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function store(Request $request)
    {
        $customer = new Customer;

        $customer->cu_name = $request->cu_name;
        $customer->cu_phone = $request->cu_phone;
        $customer->cu_email = $request->cu_email;
        $customer->cu_address = $request->cu_address;

        $customer->save();

        return redirect()->route('customer.index')->with('success', 'Data have been save !');
    }

    public function customerAdd(Request $request)
    {
        $customer = new Customer;

        $customer->cu_name = $request->cu_name;
        $customer->cu_phone = $request->cu_phone;
        $customer->cu_email = $request->cu_email;
        $customer->cu_address = $request->cu_address;

        $customer->save();

        return redirect()->route('sale.create')->with('success', 'Customer have been created successfully !');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $customer = Customer::find($id);

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.customer.edit')->withCustomer($customer)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);

        $customer->cu_name = $request->cu_name;
        $customer->cu_phone = $request->cu_phone;
        $customer->cu_email = $request->cu_email;
        $customer->cu_address = $request->cu_address;

        $customer->save();

        return redirect()->route('customer.index')->with('success', 'Data have been Upadated !');
    }

    
    public function destroy($id)
    {
        //
    }
}
