<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create ten customers that have 3 jobs each

        Customer::factory()
            ->count(10)
            ->hasFixjobs(3)
            ->create();

        //create 5 customers that dont have any jobs
        Customer::factory()
            ->count(5)
            ->create();
    }
}