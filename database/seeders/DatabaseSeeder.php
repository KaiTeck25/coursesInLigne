<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use App\Models\Episode;
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
        $this->call(UsersTableSeeder::class);
        // User::factory(10)->create();
        // Course::factory(15)->create();
        // Episode::factory(150)->create();

        // \App\Models\User::factory(10)->create();
        // \App\Models\Course::factory(15)->create();
        // \App\Models\Episode::factory(150)->create();

    }
}