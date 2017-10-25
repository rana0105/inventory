<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SelfLevel;
use App\Model\GenSetting;
use DB;

class SelflevelController extends Controller
{
    
    public function index()
    {
        $shelfs = SelfLevel::where('shelf_id', 0)->get();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.selflevel.index')->withShelfs($shelfs)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function create()
    { 
        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.selflevel.create')->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function store(Request $request)
    {
       $slst = 1;
       $shelf = new SelfLevel;

       $shelf->number = $request->shelf;
       $shelf->sl_status = $slst;

       $shelf->save();

       return redirect()->route('shelfs.index')->with('success', 'Data have been save!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $shelf = SelfLevel::find($id);

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.selflevel.edit')->withShelf($shelf)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function update(Request $request, $id)
    {
       $shelf = SelfLevel::find($id);

       $shelf->number = $request->shelf;

       $shelf->save();

       return redirect()->route('shelfs.index')->with('success', 'Data have been Updated!');
    }

    
    public function destroy($id)
    {
        //
    }

    public function getIndex(){

        $levels = SelfLevel::where('shelf_id', '!=', 0)->get();


        if(sizeof($levels)>0){
            foreach ($levels as $key => $value) {
                $value['shelf'] = $value->getShelfNumber($value->shelf_id);
            }
        }else{
            return back();
        }

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');
        //dd($levels);
        return view('backend.selflevel.level.index')->withLevels($levels)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    public function getCreate(){
        $shelfs = SelfLevel::where('shelf_id', 0)->get();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.selflevel.level.create')->withShelfs($shelfs)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    public function postStore(Request $request){

        $slst = 0;
        $level = new SelfLevel;

        $level->shelf_id = $request->shelf;
        $level->number = $request->level;
        $level->sl_status = $slst;

        $level->save();
        return redirect('levels')->with('success', 'Data have been save!');
    }

    public function getEdit($id){

        $level = SelfLevel::find($id);
        $shelf = SelfLevel::where('shelf_id', 0)->get();

        $sh = array();
        foreach ($shelf as $s) {
            $sh[$s->id] = $s->number;
        }

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.selflevel.level.edit')->withLevel($level)->withSh($sh)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    public function putUpdate(Request $request, $id){

        $slst = 0;
        $level = SelfLevel::find($id);

        $level->shelf_id = $request->shelf_id;
        $level->number = $request->subc_name;
        $level->sl_status = $slst;

        $level->save();
        return redirect('levels')->with('success', 'Data have been Update!');
    }
}
