<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SaleInvoice extends Model
{
    public function items() 
    {
    	return $this->belongsTo('App\Model\Item','item_id');
    }

      public function sales() 
    {
    	return $this->belongsTo('App\Model\Sale','sale_id');
    }
}
