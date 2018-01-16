<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
	public function subjects(){
	return $this->belongsToMany('App\subject');
	}
}
