<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kost;
use App\Models\Specification;
use App\Models\SpecificationType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(SellerSeeder::class);
        $this->call(SpecificationTypeSeeder::class);
        $this->call(KostSeeder::class);
        $this->call(SpecificationSeeder::class);
        $this->call(PictureSeeder::class);
    }
}
