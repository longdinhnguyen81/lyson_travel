<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = "id";
    public $timestamps = true;
    public $fillable = ['title', 'description', 'detail', 'picture'];

    public function tag(){
    	return $this->belongsToMany('App\Model\Tag');
    }
    public function comment(){
    	return $this->hasMany('App\Model\Comment');
    }
}
