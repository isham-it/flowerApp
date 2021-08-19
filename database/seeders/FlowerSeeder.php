<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers')->insert([
            'name' => 'Rose',
            'price' => 2
        ]);

        DB::table('flowers')->insert([
            'name' => 'Violet',
            'price' => 2.5
        ]);
    }
}
