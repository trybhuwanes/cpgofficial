<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $table = "category_trainings";
    public function run(): void
    {
        DB::table('category_trainings')->insert([
            'id' => 1,
            'name_category' => 'Meta Skill',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        DB::table('category_trainings')->insert([
            'id' => 2,
            'name_category' => 'Administrative Professional',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        DB::table('category_trainings')->insert([
            'id' => 3,
            'name_category' => 'Komunikasi',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        DB::table('category_trainings')->insert([
            'id' => 4,
            'name_category' => 'Manajemen',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        DB::table('category_trainings')->insert([
            'id' => 5,
            'name_category' => 'Leadership',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);

        DB::table('category_trainings')->insert([
            'id' => 6,
            'name_category' => 'Humas dan Protocoler',
            'created_at'=> now(),
            'updated_at' => now(),
        ]);
    }
}
