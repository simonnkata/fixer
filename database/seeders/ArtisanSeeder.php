<?php

namespace Database\Seeders;

use App\Models\Artisan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtisanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create ten artisans that have 3 bids each

        Artisan::factory()
            ->count(3)
            ->hasBids(2)
            ->create();

        //create 5 artisans that dont have any bids
        Artisan::factory()
            ->count(5)
            ->create();
    }
}