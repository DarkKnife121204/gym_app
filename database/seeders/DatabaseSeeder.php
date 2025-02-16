<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            TrainerSeeder::class,
            HallSeeder::class,
            UserSeeder::class,
            ReservationSeeder::class
        ]);
    }
}
