<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class student extends Model
{
		public function parens(){
			return $this->hasOne('App\paren');
		}
    	
    	public function grades(){
			return $this->belongsToMany('App\grade');
		}
}
