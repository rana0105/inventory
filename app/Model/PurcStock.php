<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PurcStock extends Model
{
    public function items() 
    {
    	return $this->belongsTo('App\Model\Item','item_id');
    }

     public function purchases() 
    {
    	return $this->belongsToMany('App\Model\Purchase');
    }
}
