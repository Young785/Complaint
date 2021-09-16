<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ayomikun',
            'email' => 'ayomikunariyo@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => NOW(),
            'updated_at' => NOW(),
        ]);
    }
}
