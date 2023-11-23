<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Jono',
            'email' => 'jono@fadfa.com',
            'password' => Hash::make('jonojelek'),
            'address' => 'jalan',
            'job' => 'kerjaan',
            'gender' => 'Male',
            'dob' => '2003-09-20',
            'phone_number' => '08998515439',
        ]);
    }
}
