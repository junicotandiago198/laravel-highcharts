<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Facktory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create();
    }
}