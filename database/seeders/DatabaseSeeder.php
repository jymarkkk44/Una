<?php

namespace Database\Seeders;

use App\Models\Students;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1000)->create();

        // Student DB
        Students::create([
            'name' => 'Jaymark Duran',
            'age' => 20,
        ]);
        Students::create([
            'name' => 'JP moto',
            'age' => 22,
        ]);
    }
}