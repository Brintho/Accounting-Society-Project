<?php

namespace Database\Seeders;

use App\Models\OrganizationType;
use Illuminate\Database\Seeder;

class OrganizationTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            ['name' => 'সমিতি'],
            ['name' => 'স্কুল'],
            ['name' => 'কলেজ'],
            ['name' => 'মাদ্রাসা'],
            ['name' => 'অন্যান্য'],
        ];

        foreach ($types as $type) {
            OrganizationType::create($type);
        }
    }
}
