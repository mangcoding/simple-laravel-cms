<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $fillable = [
        'name', 'position', 'testimonials', 'star', 'is_featured', 'avatar'
    ];
}
