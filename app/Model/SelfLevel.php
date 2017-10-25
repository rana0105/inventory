<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SelfLevel extends Model
{
     public function getShelfNumber($id){
    	$model = SelfLevel::find($id);
    	if($model){
    		return $model->number;
    	}else{
    		return '';
    	}
    }
}
