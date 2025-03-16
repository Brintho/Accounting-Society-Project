<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'package_name',
        'software_price',
        'annual_server_fee',
        'monthly_server_fee',
    ];
}
