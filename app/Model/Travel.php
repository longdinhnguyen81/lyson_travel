<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    public $timestamps = true;
    public $fillable = ['title', 'slug', 'description', 'detail', 'picture', 'travel_from', 'travel_to'];

    public function car(){
    	return $this->hasMany('App\Model\Car');
    }

    public function checktravel(){
        return $this->hasMany('App\Model\Checktravel');
    }
}
