<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Church_days_of_activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'days',
        'program',
        'time',
    ];
}
