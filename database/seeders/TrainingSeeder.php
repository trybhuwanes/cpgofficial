<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Training;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Training::create([
            'id_category'=> '1',
            'title_training' => 'Nama Training Pertama',
            'slug_training' => 'nama-training-pertama',
            'pict_training' => 'gambar1.jpg',
            'desc_training' => 'Deskripsi lengkap training pertama.',
            'shortdesc_training' => 'Deskripsi singkat training pertama.',
            'date_training' => '2024-05-01',
            'location_training' => 'Alamat Training Pertama',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        Training::create([
            'id_category'=> '2',
            'title_training' => 'Nama Training Kedua',
            'slug_training' => 'nama-training-kedua',
            'pict_training' => 'gambar2.jpg',
            'desc_training' => 'Deskripsi lengkap training kedua.',
            'shortdesc_training' => 'Deskripsi singkat training kedua.',
            'date_training' => '2024-05-15',
            'location_training' => 'Alamat Training Kedua',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);
    }
}
