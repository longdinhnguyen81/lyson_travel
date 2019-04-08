<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'slug_name'];

    public function post(){
    	return $this->belongsToMany('App\Model\Post');
    }
}
