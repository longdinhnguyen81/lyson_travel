<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;
    public $fillable = ['seat', 'cost', 'travel_id'];

    public function travel(){
    	return $this->hasMany('App\Model\Travel', 'travel_id');
    }
}
