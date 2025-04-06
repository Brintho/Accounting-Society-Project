<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    protected $fillable = [
        'company_address',
        'company_phone',
        'whatsapp_number',
        'company_email',
        'messenger',
        'facebook',
        'youtube_link',
        'website_link',
        'image',
        'iframe_link',
        'title',
        'software_features',
        'description',
        'features',
        'software_tagline',
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
