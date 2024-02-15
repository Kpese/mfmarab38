<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Church_head_of_department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'quotes',
        'office',
    ];
}
