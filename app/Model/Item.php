<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function pcategories() 
    {
    	return $this->belongsTo('App\Model\Category','itpc_id');
    }

     public function pur_stocks() {
        return $this->hasMany('App\Model\PurStock');
    }

    public function scategories() 
    {
    	return $this->belongsTo('App\Model\Category','itsub_id');
    }

    public function stocks() {
    	return $this->hasMany('App\Model\Stock');
    }

    public function purchases() {
        return $this->hasMany('App\Model\Purchase');
    }
}
