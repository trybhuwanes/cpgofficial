<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\SyaratAssesment;

class SyaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SyaratAssesment::create([
            'syarat' => 'Requirement 1',
            'assesment_center_id' => 1,
                        'updated_at' => '2024-04-29 17:48:21',
            'created_at' => '2024-04-29 17:48:21',
        ]);

        SyaratAssesment::create([
            'syarat' => 'Requirement 2',
            'assesment_center_id' => 1,
                        'updated_at' => '2024-04-29 17:48:21',
            'created_at' => '2024-04-29 17:48:21',
        ]);

        SyaratAssesment::create([
            'syarat' => 'Requirement 3',
            'assesment_center_id' => 1,
                        'updated_at' => '2024-04-29 17:48:21',
            'created_at' => '2024-04-29 17:48:21',
        ]);

        SyaratAssesment::create([
            'syarat' => 'Requirement 4',
            'assesment_center_id' => 1,
                        'updated_at' => '2024-04-29 17:48:21',
            'created_at' => '2024-04-29 17:48:21',
        ]);

        SyaratAssesment::create([
            'syarat' => 'Requirement 5',
            'assesment_center_id' => 1,
                        'updated_at' => '2024-04-29 17:48:21',
            'created_at' => '2024-04-29 17:48:21',
        ]);

        SyaratAssesment::create([
            'syarat' => 'Requirement 6',
            'assesment_center_id' => 1,
                        'updated_at' => '2024-04-29 17:48:21',
            'created_at' => '2024-04-29 17:48:21',
        ]);

        SyaratAssesment::create([
            'syarat' => 'Requirement 7',
            'assesment_center_id' => 1,
                        'updated_at' => '2024-04-29 17:48:21',
            'created_at' => '2024-04-29 17:48:21',
        ]);

        //
    }
}
