<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function stocks() {
    	return $this->hasMany('App\Model\Stock');
    }

    public function sale_invoices() {
        return $this->hasMany('App\Model\SaleInvoice');
    }

     public function items() 
    {
    	return $this->belongsTo('App\Model\Item','item_id');
    }

    public function customers() 
    {
    	return $this->belongsTo('App\Model\Customer','customer_id');
    }

    public function users() 
    {
        return $this->belongsTo('App\User','user_id');
    }
}
