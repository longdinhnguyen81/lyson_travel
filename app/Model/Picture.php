<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'description', 'new_id'];

    public function tour(){
    	return $this->belongsToMany('App\Model\Tour');
    }
}
