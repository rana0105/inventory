<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function items() 
    {
    	return $this->belongsTo('App\Model\Item','item_id');
    }

    public function warehouses() 
    {
    	return $this->belongsTo('App\Model\Warehouse','swp_name');
    }

    public function shelfs() 
    {
    	return $this->belongsTo('App\Model\SelfLevel','swp_shelf');
    }

    public function levels() 
    {
    	return $this->belongsTo('App\Model\SelfLevel','swp_level');
    }
}
