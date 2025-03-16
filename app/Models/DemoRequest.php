<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoRequest extends Model
{
    protected $fillable = [
        'your_name',
        'org_type_id',
        'organization_name',
        'address',
        'present_member',
        'mobile_no',
        'email',
        'status',
    ];

    public function organizationType()
    {
        return $this->belongsTo(OrganizationType::class, 'org_type_id');
    }

    //
}
