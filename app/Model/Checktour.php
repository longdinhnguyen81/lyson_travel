<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Checktour extends Model
{
    protected $table = 'checktours';
    protected $primaryKey = 'id';

    public $timestamps = true;
    public $fillable = ['name', 'people', 'phone', 'date', 'tour_id'];

    public function tour(){
    	return $this->belongsTo('App\Model\Tour');
    }
}
