<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
        public function students(){
    	return $this->belongsToMany('App\student');
    }
}
