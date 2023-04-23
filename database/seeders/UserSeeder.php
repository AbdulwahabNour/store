<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'ahmed',
            'email' => 'ahmed@yahoo.com',
            'password' => Hash::make('password'),
            'phone_number' => '01234567891',
        ]);
        // use db buider
        // DB::table('users')->insert([
        //     'name' => 'ahmed',
        //     'email' => 'ahmed@yahoo.com',
        //     'password' => Hash::make('password'),
        //     'phone_number' => '01234567891',
        // ]);
    }
}