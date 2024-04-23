<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data dummy untuk blogs
        DB::table('blogs')->insert([
            'title_blog' => 'Contoh Blog 1',
            'slug_blog' => 'contoh-blog-1',
            'pict_blog' => 'gambar1.jpg',
            'desc_blog' => 'Deskripsi blog 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('blogs')->insert([
            'title_blog' => 'Contoh Blog 2',
            'slug_blog' => 'contoh-blog-2',
            'pict_blog' => 'gambar2.jpg',
            'desc_blog' => 'Deskripsi blog 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan data dummy lainnya sesuai kebutuhan
    }
}
