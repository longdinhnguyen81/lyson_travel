<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'rates';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = ['name', 'email', 'star', 'message', 'tour_id'];

    public function tour(){
    	return $this->belongsTo('App\Model\Tour', 'tour_id');
    }
}
