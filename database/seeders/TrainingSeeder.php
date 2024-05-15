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
            'link_pendaftaran' => 'bit.ly/namatrainingpertama',
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
            'link_pendaftaran' => 'bit.ly/namatrainingkedua',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        Training::create([
            'id_category'=> '3',
            'title_training' => 'Nama Training Ketiga',
            'slug_training' => 'nama-training-ketiga',
            'pict_training' => 'gambar3.jpg',
            'desc_training' => 'Deskripsi lengkap training ketiga.',
            'shortdesc_training' => 'Deskripsi singkat training ketiga.',
            'date_training' => '2024-05-30',
            'location_training' => 'Alamat Training Ketiga',
            'link_pendaftaran' => 'bit.ly/namatrainingketiga',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        Training::create([
            'id_category'=> '4',
            'title_training' => 'Nama Training Keempat',
            'slug_training' => 'nama-training-keempat',
            'pict_training' => 'gambar4.jpg',
            'desc_training' => 'Deskripsi lengkap training keempat.',
            'shortdesc_training' => 'Deskripsi singkat training keempat.',
            'date_training' => '2024-06-01',
            'location_training' => 'Alamat Training Keempat',
            'link_pendaftaran' => 'bit.ly/namatrainingkeempat',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        Training::create([
            'id_category'=> '5',
            'title_training' => 'Nama Training Kelima',
            'slug_training' => 'nama-training-kelima',
            'pict_training' => 'gambar5.jpg',
            'desc_training' => 'Deskripsi lengkap training kelima.',
            'shortdesc_training' => 'Deskripsi singkat training kelima.',
            'date_training' => '2024-06-15',
            'location_training' => 'Alamat Training Kelima',
            'link_pendaftaran' => 'bit.ly/namatrainingkelima',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        Training::create([
            'id_category'=> '3',
            'title_training' => 'Nama Training Ketiga',
            'slug_training' => 'nama-training-ketiga',
            'pict_training' => 'gambar3.jpg',
            'desc_training' => 'Deskripsi lengkap training ketiga.',
            'shortdesc_training' => 'Deskripsi singkat training ketiga.',
            'date_training' => '2024-05-30',
            'location_training' => 'Alamat Training Ketiga',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        Training::create([
            'id_category'=> '4',
            'title_training' => 'Nama Training Keempat',
            'slug_training' => 'nama-training-keempat',
            'pict_training' => 'gambar4.jpg',
            'desc_training' => 'Deskripsi lengkap training keempat.',
            'shortdesc_training' => 'Deskripsi singkat training keempat.',
            'date_training' => '2024-06-01',
            'location_training' => 'Alamat Training Keempat',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        Training::create([
            'id_category'=> '5',
            'title_training' => 'Nama Training Kelima',
            'slug_training' => 'nama-training-kelima',
            'pict_training' => 'gambar5.jpg',
            'desc_training' => 'Deskripsi lengkap training kelima.',
            'shortdesc_training' => 'Deskripsi singkat training kelima.',
            'date_training' => '2024-06-15',
            'location_training' => 'Alamat Training Kelima',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);
    }
}
