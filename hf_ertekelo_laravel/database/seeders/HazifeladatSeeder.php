<?php

namespace Database\Seeders;

use App\Models\Hazifeladatok;
use Illuminate\Database\Seeder;

class HazifeladatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hazifeladatok::factory(10)->create();
    }
}
