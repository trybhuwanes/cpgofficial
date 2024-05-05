<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UKAssesment;
Use Illuminate\Support\Facades\DB;


class UKAssesmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UKAssesment::create([
            'uk' => 'Kemampuan untuk bekerja dibawah tekanan',
            'assesment_center_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        UKAssesment::create([
            'uk' => 'Kemampuan untuk bekerja dalam tim',
            'assesment_center_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        UKAssesment::create([
            'uk' => 'Kemampuan untuk berkomunikasi',
            'assesment_center_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        UKAssesment::create([
            'uk' => 'Kemampuan untuk berpikir kritis',
            'assesment_center_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        UKAssesment::create([
            'uk' => 'Kemampuan untuk memecahkan masalah',
            'assesment_center_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        UKAssesment::create([
            'uk' => 'Kemampuan untuk beradaptasi',
            'assesment_center_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //

    }
}
