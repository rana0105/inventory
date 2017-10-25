<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function purc_stocks() {
    	return $this->hasMany('App\Model\PurcStock');
    }

    public function pur_stocks() {
    	return $this->hasMany('App\Model\PurStock');
    }

    public function items() 
    {
    	return $this->belongsTo('App\Model\Item','item_id');
    }
}
