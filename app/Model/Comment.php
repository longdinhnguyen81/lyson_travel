<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = true;
    public $fillable = ['name', 'email', 'description', 'new_id'];

    public function new(){
    	return $this->belongsTo('App\Model\New', 'new_id');
    }
}
