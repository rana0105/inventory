<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/welcome', 'HomeController@index')->name('welcome');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');

    Route::resource('category', 'Backend\CategoryController');

    Route::get('subcategory', 'Backend\CategoryController@getIndex');
    Route::get('subcategory/create', 'Backend\CategoryController@getCreate');
    Route::post('subcategory', 'Backend\CategoryController@postStore');
    Route::get('subcategory/{id}', 'Backend\CategoryController@getEdit');
    Route::put('updatecategory/{id}', 'Backend\CategoryController@putUpdate');

    Route::resource('shelfs', 'Backend\SelflevelController');

    Route::get('levels', 'Backend\SelflevelController@getIndex');
    Route::get('levels/create', 'Backend\SelflevelController@getCreate');
    Route::post('levels', 'Backend\SelflevelController@postStore');
    Route::get('levels/{id}', 'Backend\SelflevelController@getEdit');
    Route::put('updatelevels/{id}', 'Backend\SelflevelController@putUpdate');

    Route::resource('warehouse', 'Backend\WarehouseController');

    Route::resource('payment', 'Backend\PaymentController');

    Route::resource('customer', 'Backend\CustomerController');

    Route::post('customerAdd', 'Backend\CustomerController@customerAdd');

    Route::resource('item', 'Backend\ItemController');

    Route::get('barcode', 'Backend\ItemController@createBarcode');

    Route::get('getcheckItem/{id}', 'Backend\SaleController@getcheckItem');

    Route::get('getcategoryDrop/{id}', 'Backend\ItemController@getcategoryDrop');

    Route::resource('purchase', 'Backend\PurchaseController');

    Route::resource('stock', 'Backend\StockController');

    Route::get('getshelflevelDrop/{id}', 'Backend\StockController@getshelflevelDrop');

    Route::get('getitemquantityDrop/{id}', 'Backend\StockController@getitemquantityDrop');

    Route::get('getquantitypriceDrop/{id}', 'Backend\StockController@getquantitypriceDrop');

    Route::resource('sale', 'Backend\SaleController');

    Route::resource('gsetting', 'Backend\GenSettingController');


    // Report Section route


    Route::get('purchase-report', 'Backend\ReportController@getPurchase');
    Route::post('purchase-report', 'Backend\ReportController@postPurchase');
    Route::get('purchasePrint', 'Backend\ReportController@purchasePdf');

    Route::get('sale-report', 'Backend\ReportController@getSale');
    Route::post('sale-report', 'Backend\ReportController@postSale');

    Route::get('stock-report', 'Backend\ReportController@getStock');
    Route::post('stock-report', 'Backend\ReportController@postStock');
    Route::post('stock-reportw', 'Backend\ReportController@postStockw');

    Route::get('printTest', function(){
        $pdf = \PDF::loadHTML('<h3>First test print to PDF!</h3>');

        return $pdf->stream();
    });

});

