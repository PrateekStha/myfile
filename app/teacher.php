<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
			public function subjects(){
			return $this->belongsToMany('App\subject');
		}
}
