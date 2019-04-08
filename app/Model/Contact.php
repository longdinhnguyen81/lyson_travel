<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'email', 'phone', 'message'];
}
