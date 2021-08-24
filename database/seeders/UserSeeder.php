<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username' => 'Rose',
            'email' => 'rose@gmail.com',
            'password' => 'coco',
        ]);

        DB::table('user')->insert([
            'username' => 'artur',
            'email' => 'artur@gmail.com',
            'password' => 'coca',
        ]);

        DB::table('user')->insert([
            'username' => 'iveta',
            'email' => 'iveta@gmail.com',
            'password' => 'coci',
        ]);



    }
}
