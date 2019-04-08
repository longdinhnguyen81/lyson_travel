<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post_Tag extends Model
{
	protected $table = 'post_tag';
    public $timestamps = false;
    public $fillable = ['tag_id', 'post_id'];

    public function post(){
    	return $this->belongsTo('App\Model\Post', 'post_id');
    }

    public function tag(){
    	return $this->belongsTo('App\Model\Tag', 'tag_id');
    }
}
