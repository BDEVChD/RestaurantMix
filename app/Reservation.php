<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'email', 'phone_number', 'guests_total', 'time'
    ];

}
