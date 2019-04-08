<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Stick extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'slug_name'];

    public function tour(){
    	return $this->belongsToMany('App\Model\Tour');
    }
}
