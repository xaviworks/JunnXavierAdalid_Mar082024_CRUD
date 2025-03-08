<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'course',
        'name',
        'year',
        'semester',
        'prelim',
        'midterm',
        'prefinal',
        'final',
      ];
}
