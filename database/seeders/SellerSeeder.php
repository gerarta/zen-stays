<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sellers')->insert([
            'name' => 'Mamat Hussein',
            'email' => 'mhuessein123@gmail.com',
            'password' => Hash::make('mamathussein'),
            'phone_number' => '0899859825',
            'dob' => Carbon::createFromDate(1995, 10, 25),
            'gender' => 'Male',
            'account_type' => 'BANK BCA',
            'account_number' => '527319581',
            'password_resets' => 0,
        ]);
    }
}
