<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UMKMStory;

class UMKMStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UMKMStory::create([
            'title_story' => 'Judul Cerita 1',
            'slug_story' => 'judul-cerita-1',
            'pict_story' => 'gambar1.jpg',
            'body_story' => 'Isi cerita pertama...',
        ]);

        UMKMStory::create([
            'title_story' => 'Judul Cerita 2',
            'slug_story' => 'judul-cerita-2',
            'pict_story' => 'gambar2.jpg',
            'body_story' => 'Isi cerita kedua...',
        ]);

        // Tambahkan data cerita lainnya sesuai kebutuhan
    }
}
