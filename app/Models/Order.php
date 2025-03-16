<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'org_type_id',
        'organization_name',
        'address',
        'image',
        'mobile_no',
        'organization_head_name',
        'national_id',
        'email',
        'package_id',
        'status',
    ];

    public function organizationType()
    {
        return $this->belongsTo(OrganizationType::class, 'org_type_id');
    }

    public function package()
    {
        return $this->belongsTo(Price::class, 'package_id');
    }
}
