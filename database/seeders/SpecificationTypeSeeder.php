<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Room specification
        DB::table('specification_types')->insert([
            'type' => 'Room Specification',
            'icon' => 'https://img.icons8.com/ios/50/room.png',
            'name' => 'Dimension',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Room Specification',
            'icon' => 'https://img.icons8.com/ios/50/lightning-bolt--v1.png',
            'name' => 'Electricity',
        ]);

        // Room facility
        DB::table('specification_types')->insert([
            'type' => 'Room Facility',
            'icon' => 'https://img.icons8.com/ios/50/bed.png',
            'name' => 'Bed',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Room Facility',
            'icon' => 'https://img.icons8.com/ios/50/pillow.png',
            'name' => 'Pillow',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Room Facility',
            'icon' => 'https://img.icons8.com/ios/50/wifi--v1.png',
            'name' => 'WiFi',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Room Facility',
            'icon' => 'https://img.icons8.com/ios/50/desk.png',
            'name' => 'Desk',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Room Facility',
            'icon' => 'https://img.icons8.com/ios/50/open-window.png',
            'name' => 'Window',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Room Facility',
            'icon' => 'https://img.icons8.com/ios/80/closet.png',
            'name' => 'Closet',
        ]);

        // Bathroom Facility
        DB::table('specification_types')->insert([
            'type' => 'Bathroom Facility',
            'icon' => 'https://img.icons8.com/ios/50/shower-and-tub.png',
            'name' => 'Bathroom',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Bathroom Facility',
            'icon' => 'https://img.icons8.com/ios/50/wc.png',
            'name' => 'Toilet',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Bathroom Facility',
            'icon' => 'https://img.icons8.com/ios/50/heating.png',
            'name' => 'Water Heater',
        ]);

        // Others
        DB::table('specification_types')->insert([
            'type' => 'Others',
            'icon' => 'https://img.icons8.com/ios/50/car--v1.png',
            'name' => 'Car Parking',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Others',
            'icon' => 'https://img.icons8.com/ios/50/motorcycle.png',
            'name' => 'Motorcycle Parking',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Others',
            'icon' => 'https://img.icons8.com/ios/50/kitchen.png',
            'name' => 'Outside Kitchen',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Others',
            'icon' => 'https://img.icons8.com/pastel-glyph/64/person-male--v1.png',
            'name' => 'Person from University',
        ]);

        // Near This Kost
        DB::table('specification_types')->insert([
            'type' => 'Near This Kost',
            'icon' => 'https://img.icons8.com/pastel-glyph/64/hospital--v3.png',
            'name' => 'Hospital',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Near This Kost',
            'icon' => 'https://img.icons8.com/ios/50/police-badge.png',
            'name' => 'Police Station',
        ]);
        DB::table('specification_types')->insert([
            'type' => 'Near This Kost',
            'icon' => 'https://img.icons8.com/ios/50/restaurant.png',
            'name' => 'Restaurant',
        ]);
    }
}
