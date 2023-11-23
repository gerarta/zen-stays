<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_providers')->insert([
            [
                'payment_type' => 'Bank',
                'name' => 'BCA'
            ],
            [
                'payment_type' => 'Bank',
                'name' => 'Mandiri'
            ],
            [
                'payment_type' => 'Bank',
                'name' => 'BNI'
            ],
            [
                'payment_type' => 'Bank',
                'name' => 'Maybank'
            ],
            [
                'payment_type' => 'E-Wallet',
                'name' => 'OVO'
            ],
            [
                'payment_type' => 'E-Wallet',
                'name' => 'Go-Pay'
            ],
            [
                'payment_type' => 'E-Wallet',
                'name' => 'Bli-Pay'
            ],
        ]);
    }
}
