<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kosts')->insert(
            [
                [

                    'seller_id' => 1,
                    'name' => 'Kost U18A - Room Tipe B',
                    'address' => 'Jl. U No. 18A, Kemanggisan',
                    'city' => 'Jakarta Barat',
                    'province' => 'DKI Jakarta',
                    'price' => 999999,
                    'fixed_quota' => 20,
                    'temp_quota' => 0,
                    'rules' => '<ol>
                        <li>Maks. 2 orang per kamar</li>
                        <li>Tamu menginap dikenakan biaya</li>
                        <li>Tidak boleh bawa anak</li>
                        <li>Deposit: Rp. 150.000</li>
                    </ol>',
                    'gender' => 'All',
                    'rating' => 0,
                ],
                [
                    'seller_id' => 1,
                    'name' => 'Kost Mandala 4',
                    'address' => 'Palmerah Barat',
                    'price' => 2399999,
                    'city' => 'Jakarta Barat',
                    'province' => 'DKI Jakarta',
                    'fixed_quota' => 20,
                    'temp_quota' => 0,
                    'rules' => '<ol>
                        <li>Maks. 2 orang per kamar</li>
                        <li>Tamu menginap dikenakan biaya</li>
                        <li>Tidak boleh bawa anak</li>
                        <li>Deposit: Rp. 150.000</li>
                    </ol>',
                    'gender' => 'All',
                    'rating' => 0,
                ],
                [
                    'seller_id' => 1,
                    'name' => 'Kost U-21',
                    'address' => 'Palmerah Barat',
                    'price' => 1799999,
                    'city' => 'Jakarta Barat',
                    'province' => 'DKI Jakarta',
                    'fixed_quota' => 20,
                    'temp_quota' => 0,
                    'rules' => '<ol>
                        <li>Maks. 2 orang per kamar</li>
                        <li>Tamu menginap dikenakan biaya</li>
                        <li>Tidak boleh bawa anak</li>
                        <li>Deposit: Rp. 150.000</li>
                    </ol>',
                    'gender' => 'All',
                    'rating' => 0,
                ],
                [
                    'seller_id' => 1,
                    'name' => 'Kost Perdamaian',
                    'address' => 'Palmerah Barat',
                    'price' => 1500000,
                    'city' => 'Jakarta Barat',
                    'province' => 'DKI Jakarta',
                    'fixed_quota' => 20,
                    'temp_quota' => 0,
                    'rules' => '<ol>
                        <li>Maks. 2 orang per kamar</li>
                        <li>Tamu menginap dikenakan biaya</li>
                        <li>Tidak boleh bawa anak</li>
                        <li>Deposit: Rp. 150.000</li>
                    </ol>',
                    'gender' => 'All',
                    'rating' => 0,
                ],
                [
                    'seller_id' => 1,
                    'name' => 'Kost Victory',
                    'address' => 'Palmerah Barat',
                    'price' => 1200000,
                    'city' => 'Jakarta Barat',
                    'province' => 'DKI Jakarta',
                    'fixed_quota' => 20,
                    'temp_quota' => 0,
                    'rules' => '<ol>
                        <li>Maks. 2 orang per kamar</li>
                        <li>Tamu menginap dikenakan biaya</li>
                        <li>Tidak boleh bawa anak</li>
                        <li>Deposit: Rp. 150.000</li>
                    </ol>',
                    'gender' => 'All',
                    'rating' => 0,
                ],
                [
                    'seller_id' => 1,
                    'name' => 'Kost Mandala 3',
                    'address' => 'Palmerah Barat',
                    'price' => 2500000,
                    'city' => 'Jakarta Barat',
                    'province' => 'DKI Jakarta',
                    'fixed_quota' => 20,
                    'temp_quota' => 0,
                    'rules' => '<ol>
                        <li>Maks. 2 orang per kamar</li>
                        <li>Tamu menginap dikenakan biaya</li>
                        <li>Tidak boleh bawa anak</li>
                        <li>Deposit: Rp. 150.000</li>
                    </ol>',
                    'gender' => 'All',
                    'rating' => 0,
                ],
                 
                
                 
            ],
        );
    }
}
