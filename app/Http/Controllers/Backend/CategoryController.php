<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\GenSetting;
use DB;

class CategoryController extends Controller
{
    
    public function index()
    {
        $parents = Category::where('pc_id', 0)->get();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.category.index')->withParents($parents)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function create()
    {
        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.category.create')->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function store(Request $request)
    {
       $cst = 1;
       $parent = new Category;

       $parent->name = $request->name;
       $parent->c_status = $cst;

       $parent->save();

       return redirect()->route('category.index')->with('success', 'Data have been save!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $parent = Category::find($id);

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.category.edit')->withParent($parent)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function update(Request $request, $id)
    {
       $parent = Category::find($id);

       $parent->name = $request->name;

       $parent->save();

       return redirect()->route('category.index')->with('success', 'Data have been Updated!');
    }

    
    public function destroy($id)
    {
        //
    }

    public function getIndex(){

        $subcate = Category::where('pc_id', '!=', 0)->get();

        if(sizeof($subcate)>0){
            foreach ($subcate as $key => $value) {
                $value['parent'] = $value->getParentName($value->pc_id);
            }
        }else{
            return back();
        }

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');
        
        return view('backend.category.subcategory.index')->withSubcate($subcate)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    public function getCreate(){
        $parent = Category::where('pc_id', 0)->get();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.category.subcategory.create')->withParent($parent)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    public function postStore(Request $request){

        $cst = 0;
        $subcategory = new Category;

        $subcategory->pc_id = $request->name;
        $subcategory->name = $request->subc_name;
        $subcategory->c_status = $cst;

        $subcategory->save();
        return redirect('subcategory')->with('success', 'Data have been save!');
    }

    public function getEdit($id){

        $subcategory = Category::find($id);
        $parent = Category::where('pc_id', 0)->get();

        $pc = array();
        foreach ($parent as $p) {
            $pc[$p->id] = $p->name;
        }

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.category.subcategory.edit')->withSubc($subcategory)->withPc($pc)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    public function putUpdate(Request $request, $id){

        $cst = 0;
        $subcategory = Category::find($id);

        $subcategory->pc_id = $request->pc_id;
        $subcategory->name = $request->subc_name;
        $subcategory->c_status = $cst;

        $subcategory->save();
        return redirect('subcategory')->with('success', 'Data have been Update!');
    }
}
