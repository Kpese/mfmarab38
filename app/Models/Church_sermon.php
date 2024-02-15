<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Church_sermon extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic',
        'audio',
        'preached_by',
    ];
}
