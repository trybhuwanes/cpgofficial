<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssesmentCenter;

class AssesmentCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AssesmentCenter::create([
            'title' => 'Title of Assesment Center',
            'slug' => 'title-of-assesment-center',
            'pict' => 'image_path.jpg',
            'desc' => 'Description of Assesment Center',
            'importance' => '1',
            'uk' => 'UK of Assesment Center',
            'syarat1' => 'Requirement 1',
            'syarat2' => 'Requirement 2',
            'syarat3' => 'Requirement 3',
            'syarat4' => 'Requirement 4',
            'syarat5' => 'Requirement 5',
            'syarat6' => 'Requirement 6',
            'pictagenda' => 'agenda_image_path.jpg',
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);

        // You can add more seed data here if needed
    }
}
