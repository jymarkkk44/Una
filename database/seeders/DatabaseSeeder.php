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
        User::factory(100)->create();

        // Student DB
        Students::create([
            'name' => 'jaymark',
            'age' => 20,
        ]);
        Students::create([
            'name' => 'Cyril Jed Kyle Estrellada',
            'age' => 22,
        ]);
    }
}