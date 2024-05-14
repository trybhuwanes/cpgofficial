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
            'pictagenda' => 'agenda_image_path.jpg',
            // 'created_at' => now(),
            // 'updated_at' => now(),
        ]);

        // You can add more seed data here if needed
    }
}
