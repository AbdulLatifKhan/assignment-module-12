<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['date','from','to', 'departure_time', 'arrival_time'];

    protected $casts = [
        'to' => 'array'
    ];
}
