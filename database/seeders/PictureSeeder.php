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
            [
                'kost_id' => 1,
                'name' => 'Room',
                'link' => '/storage/kost/1/1.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 1,
                'name' => 'Room',
                'link' => '/storage/kost/1/2.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 1,
                'name' => 'Room',
                'link' => '/storage/kost/1/3.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 1,
                'name' => 'Room',
                'link' => '/storage/kost/1/4.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 1,
                'name' => 'Noon Environment',
                'link' => '/storage/kost/1/PANO_1.jpg',
                'type' => 'Panorama',
            ],
            [
                'kost_id' => 1,
                'name' => 'Night Environment',
                'link' => '/storage/kost/1/PANO_2.jpg',
                'type' => 'Panorama',
            ],
            [
                'kost_id' => 2,
                'name' => 'Room',
                'link' => 'https://images.unsplash.com/photo-1588796460666-590f1d712a2e?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=MnwxfDB8MXxyYW5kb218MHx8ZG9ybXx8fHx8fDE3MDA2NDYzMDc&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1000',
                'type' => 'normal',
            ],
            [
                'kost_id' => 2,
                'name' => 'Room',
                'link' => '/storage/kost/1/2.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 2,
                'name' => 'Room',
                'link' => '/storage/kost/1/3.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 2,
                'name' => 'Room',
                'link' => '/storage/kost/1/4.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 2,
                'name' => 'Noon Environment',
                'link' => '/storage/kost/1/PANO_1.jpg',
                'type' => 'Panorama',
            ],
            [
                'kost_id' => 2,
                'name' => 'Night Environment',
                'link' => '/storage/kost/1/PANO_2.jpg',
                'type' => 'Panorama',
            ],
            [
                'kost_id' => 3,
                'name' => 'Room',
                'link' => 'https://images.unsplash.com/photo-1611048267707-aef79593a3ed?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=MnwxfDB8MXxyYW5kb218MHx8ZG9ybXx8fHx8fDE3MDA2NDYzNjY&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1000',
                'type' => 'normal',
            ],
            [
                'kost_id' => 3,
                'name' => 'Room',
                'link' => '/storage/kost/1/2.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 3,
                'name' => 'Room',
                'link' => '/storage/kost/1/3.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 3,
                'name' => 'Room',
                'link' => '/storage/kost/1/4.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 3,
                'name' => 'Noon Environment',
                'link' => '/storage/kost/1/PANO_1.jpg',
                'type' => 'Panorama',
            ],
            [
                'kost_id' => 3,
                'name' => 'Night Environment',
                'link' => '/storage/kost/1/PANO_2.jpg',
                'type' => 'Panorama',
            ],
            [
                'kost_id' => 4,
                'name' => 'Room',
                'link' => 'https://images.unsplash.com/photo-1590675960591-37b658440031?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=MnwxfDB8MXxyYW5kb218MHx8ZG9ybXx8fHx8fDE3MDA2NDYzODM&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1000',
                'type' => 'normal',
            ],
            [
                'kost_id' => 4,
                'name' => 'Room',
                'link' => '/storage/kost/1/2.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 4,
                'name' => 'Room',
                'link' => '/storage/kost/1/3.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 4,
                'name' => 'Room',
                'link' => '/storage/kost/1/4.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 4,
                'name' => 'Noon Environment',
                'link' => '/storage/kost/1/PANO_1.jpg',
                'type' => 'Panorama',
            ],
            [
                'kost_id' => 4,
                'name' => 'Night Environment',
                'link' => '/storage/kost/1/PANO_2.jpg',
                'type' => 'Panorama',
            ],
            [
                'kost_id' => 5,
                'name' => 'Room',
                'link' => 'https://images.unsplash.com/photo-1623286728232-9107cb8f6b11?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=MnwxfDB8MXxyYW5kb218MHx8ZG9ybXx8fHx8fDE3MDA2NDY0MTQ&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1000',
                'type' => 'normal',
            ],
            [
                'kost_id' => 5,
                'name' => 'Room',
                'link' => '/storage/kost/1/2.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 5,
                'name' => 'Room',
                'link' => '/storage/kost/1/3.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 5,
                'name' => 'Room',
                'link' => '/storage/kost/1/4.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 5,
                'name' => 'Noon Environment',
                'link' => '/storage/kost/1/PANO_1.jpg',
                'type' => 'Panorama',
            ],
            [
                'kost_id' => 5,
                'name' => 'Night Environment',
                'link' => '/storage/kost/1/PANO_2.jpg',
                'type' => 'Panorama',
            ],
            [
                'kost_id' => 6,
                'name' => 'Room',
                'link' => 'https://images.unsplash.com/photo-1600948881750-962d07bb3619?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=600&ixid=MnwxfDB8MXxyYW5kb218MHx8ZG9ybXx8fHx8fDE3MDA2NDY0MjM&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1000',
                'type' => 'normal',
            ],
            [
                'kost_id' => 6,
                'name' => 'Room',
                'link' => '/storage/kost/1/2.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 6,
                'name' => 'Room',
                'link' => '/storage/kost/1/3.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 6,
                'name' => 'Room',
                'link' => '/storage/kost/1/4.jpeg',
                'type' => 'Normal',
            ],
            [
                'kost_id' => 6,
                'name' => 'Noon Environment',
                'link' => '/storage/kost/1/PANO_1.jpg',
                'type' => 'Panorama',
            ],
            [
                'kost_id' => 6,
                'name' => 'Night Environment',
                'link' => '/storage/kost/1/PANO_2.jpg',
                'type' => 'Panorama',
            ],
        ]
        );
    }
}
