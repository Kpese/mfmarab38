<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bible_verse extends Model
{
    use HasFactory;

    protected $fillable = [
        'bible_texts',
        'bible_verses',
    ];
}
