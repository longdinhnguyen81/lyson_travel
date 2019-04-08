<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false;
    public $fillable = ['username', 'fullname'];
}
