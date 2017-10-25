<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Item;
use App\Model\Category;
use App\Model\Stock;
use Storage;
use Image;
use Intervention\Image\ImageManager;
use App\Model\GenSetting;
use DB;

class ItemController extends Controller
{
    
    public function index()
    {
        $items = Item::all();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.item.index')->withItems($items)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    
    public function create()
    {
        $parentc = Category::where('pc_id', 0)->get();
        $subc = Category::where('pc_id', '!=', 0)->get();

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.item.create')->withParentc($parentc)->withSubc($subc)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }

    public function createBarcode()
    {
        $barcode = Stock::all(['item_id', 'u_price']);

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');
        
        return view('backend.item.barcode')->withBarcode($barcode)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);
    }


    public function getcategoryDrop($id)
    {
        $subc = DB::table("categories")
                    ->where("pc_id",$id)
                    ->pluck("name","id");
        return json_encode($subc);
    }

    
    public function store(Request $request)
    {
        $images = $request->file('it_image');

        $filename = time().'.'.$images->getClientOriginalExtension();
        $location = public_path('/images/resize_images/'. $filename);
        Image::make($images)->resize(600 , 600)->save($location);

        if($images)
        {
            $item = new Item;
            
            $item->it_name = $request->it_name;
            $item->it_barcode = $request->it_barcode;
            $item->itpc_id = $request->itpc_id;
            $item->itsub_id = $request->itsub_id;
            $item->it_descrip = $request->it_descrip;
            $item->it_image = $filename;      
        }

        $item->save();

        return redirect()->route('item.index')->with('success' , 'Data have been save!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $item = Item::find($id);

        $pa = Category::where('pc_id', 0)->get();
        $parentc = array();

        foreach ($pa as $p) {
            $parentc[$p->id] = $p->name;
        }

        $sub = Category::where('pc_id', '!=', 0)->get();

        $subc = array();

        foreach ($sub as $su) {
            $subc[$su->id] = $su->name;
        }

        $name = DB::table('gen_settings')->pluck('inven_name');
        $logo = DB::table('gen_settings')->pluck('logo');
        $copy = DB::table('gen_settings')->pluck('copy');
        $year = DB::table('gen_settings')->pluck('year');
        $currency = DB::table('gen_settings')->pluck('currency');

        return view('backend.item.edit')->withItem($item)->withParentc($parentc)->withSubc($subc)->withName($name)->withLogo($logo)->withCopy($copy)->withYear($year)->withCurrency($currency);

    }

    
    public function update(Request $request, $id)
    {
        $images = $request->file('it_image');
        $item = Item::find($id);
            
        if($images != null) {              
            $filename = time().'.'.$images->getClientOriginalExtension();
            $location = public_path('/images/resize_images/'. $filename);
            Image::make($images)->resize(600 , 600)->save($location);

            $oldFilename = $item->it_image;
            $item->it_image = $filename;
            Storage::delete($oldFilename);

        } else {
            $item->it_name = $request->it_name;
            $item->it_barcode = $request->it_barcode;
            $item->itpc_id = $request->itpc_id;
            $item->itsub_id = $request->itsub_id;
            $item->it_descrip = $request->it_descrip;
        }

        $item->save();
        return redirect()->route('item.index')->with(['success' => 'Data have been updated !']);
    }

    
    public function destroy($id)
    {
        //
    }
}
