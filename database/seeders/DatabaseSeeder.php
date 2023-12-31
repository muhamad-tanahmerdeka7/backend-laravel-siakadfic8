<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Database\Seeders\ScheduleSeeder;
use Database\Seeders\SubjectSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call([
            UserSedeer::class,
            SubjectSeeder::class,
            ScheduleSeeder::class,
            KhsSeeder::class,
            AbsensiMatakulSeeder::class,
            StudentScheduleSeeder::class,

        ]);
    }
}
