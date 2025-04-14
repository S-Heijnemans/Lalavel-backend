<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banana extends Model
{
   protected $fillable = [
        'name',
        'order_number',
        'amount',
    ];
}
