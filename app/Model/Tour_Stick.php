<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tour_Stick extends Model
{
	protected $table = 'stick_tour';
    public $timestamps = false;
    public $fillable = ['stick_id', 'tour_id'];

    public function stick(){
    	return $this->belongsTo('App\Model\Stick', 'stick_id');
    }
    public function tour(){
    	return $this->belongsTo('App\Model\Tour', 'tour_id');
    }

}
