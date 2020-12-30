<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

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
            'name' => Str::random(10),
            'role' => 'Admin',
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(60)
        ]);
    }
}
