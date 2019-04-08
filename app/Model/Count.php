	<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    public $timestamps = false;
    public $fillable = ['author', 'page', 'day', 'month'];
}
