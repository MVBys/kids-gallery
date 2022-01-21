<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Work;
use App\Models\User;
use App\Models\Contest;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();
        Contest::factory()->count(40)->create();
        Work::factory()->count(100)->create();
    }
}
