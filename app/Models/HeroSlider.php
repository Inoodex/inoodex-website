<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSlider extends Model
{
    protected $table = 'hero_sliders';

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image',
        'status',
        'sort_order'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}