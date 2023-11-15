<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Boarding House 1
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 1,
            'description' => '3 x 3 meter'
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 2,
            'description' => ''
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 3,
            'description' => ''
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 4,
            'description' => ''
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 5,
            'description' => '20 mbps'
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 6,
            'description' => ''
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 7,
            'description' => ''
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 8,
            'description' => ''
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 9,
            'description' => 'Inside Room'
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 10,
            'description' => ''
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 11,
            'description' => ''
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 12,
            'description' => ''
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 13,
            'description' => ''
        ]);
        DB::table('specifications')->insert([
            'boarding_house_id' => 1,
            'specification_type_id' => 14,
            'description' => ''
        ]);
    }
}
