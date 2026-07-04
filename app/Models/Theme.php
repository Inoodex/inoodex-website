<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'price',
        'image',
        'demo_url',
        'status',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
