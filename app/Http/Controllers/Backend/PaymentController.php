<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Payment;
use App\Model\GenSetting;
use DB;


class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.payment.index')->withPayments($payments)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function create()
    {
        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.payment.create')->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function store(Request $request)
    {
       $payment = new Payment;

       $payment->pay_name = $request->pay_name;
       $payment->pay_status = $request->pay_status;

       $payment->save();

       return redirect()->route('payment.index')->with('success', 'Data have been save!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $payment = Payment::find($id);

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');
        
        return view('backend.payment.edit')->withPayment($payment)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function update(Request $request, $id)
    {
       $payment = Payment::find($id);

       $payment->pay_name = $request->pay_name;
       $payment->pay_status = $request->pay_status;

       $payment->save();

       return redirect()->route('payment.index')->with('success', 'Data have been Updated!');
    }

    
    public function destroy($id)
    {
        //
    }
}
