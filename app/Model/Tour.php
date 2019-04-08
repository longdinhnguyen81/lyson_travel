<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    
    public $timestamps = true;
    public $fillable = ['title', 'description', 'picture', 'detail', 'ticket', 'hotel', 'time', 'people', 'cost', 'recost'];

    public function stick(){
    	return $this->belongsToMany('App\Model\Stick');
    }

    public function rate(){
    	return $this->hasMany('App\Model\Rate');
    }

    public function picture(){
    	return $this->hasMany('App\Model\Picture');
    }

    public function checktour(){
        return $this->hasMany('App\Model\Checktour');
    }
}
