<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    protected $fillable = [
        'image',
        'iframe_link',
        'title',
        'description',
        'features',
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
