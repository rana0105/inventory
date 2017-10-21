<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getParentName($id){
    	$model = Category::find($id);
    	if($model){
    		return $model->name;
    	}else{
    		return '';
    	}
    }

    public function items() {
    	return $this->hasMany('App\Model\Item');
    }
}
