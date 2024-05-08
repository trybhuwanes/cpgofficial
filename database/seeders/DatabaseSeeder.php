<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(BlogSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TrainingSeeder::class);
        $this->call(AssesmentCenterSeeder::class);
        $this->call(SyaratSeeder::class);
        $this->call(UKAssesmentSeeder::class);
        $this->call(UMKMStorySeeder::class);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
