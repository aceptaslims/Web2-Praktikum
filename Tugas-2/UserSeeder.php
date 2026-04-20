<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'npm' => 5520124033, 
            'username' => 'taslim',
            'first_name' => 'tasfaa',
            'last_name' => 'fafa',
            'email' => 'tasfa@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('taslim123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}