<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->insert([
            'kost_id' => 1,
            'name' => 'Room',
            'link' => '/storage/kost/1/1.jpeg',
            'type' => 'Normal',
        ]);
        DB::table('pictures')->insert([
            'kost_id' => 1,
            'name' => 'Room',
            'link' => '/storage/kost/1/2.jpeg',
            'type' => 'Normal',
        ]);
        DB::table('pictures')->insert([
            'kost_id' => 1,
            'name' => 'Room',
            'link' => '/storage/kost/1/3.jpeg',
            'type' => 'Normal',
        ]);
        DB::table('pictures')->insert([
            'kost_id' => 1,
            'name' => 'Room',
            'link' => '/storage/kost/1/4.jpeg',
            'type' => 'Normal',
        ]);
        DB::table('pictures')->insert([
            'kost_id' => 1,
            'name' => 'Room',
            'link' => '/storage/kost/1/5.jpeg',
            'type' => 'Panorama',
        ]);
    }
}
