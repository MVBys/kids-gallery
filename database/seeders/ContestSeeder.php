<?php

namespace Database\Seeders;

use App\Models\Contest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contest::factory()->count(40)->create();
    }
}
