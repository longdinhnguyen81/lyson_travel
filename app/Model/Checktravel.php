<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Checktravel extends Model
{
    protected $table = 'checktravels';
    protected $primaryKey = 'id';

    public $timestamps = true;
    public $fillable = ['name', 'seat', 'phone', 'date', 'message', 'travel_id'];

    public function travel(){
    	return $this->belongsToMany('App\Model\Travel', 'travel_id');
    }
}
