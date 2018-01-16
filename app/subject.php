<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
            public function teachers(){
    	return $this->belongsToMany('App\teacher');
    }
}
