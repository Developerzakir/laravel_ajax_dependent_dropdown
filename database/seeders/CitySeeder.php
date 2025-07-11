<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            // Cities for Dhaka (state_id: 1)
            ['name' => 'Dhanmondi', 'state_id' => 1],
            ['name' => 'Gulshan', 'state_id' => 1],
            ['name' => 'Mirpur', 'state_id' => 1],

            // Cities for Chittagong (state_id: 2)
            ['name' => 'Pahartali', 'state_id' => 2],
            ['name' => 'Agrabad', 'state_id' => 2],

            // Cities for Khulna (state_id: 3)
            ['name' => 'Sonadanga', 'state_id' => 3],

            // Cities for West Bengal (state_id: 4)
            ['name' => 'Kolkata', 'state_id' => 4],

            // Cities for Maharashtra (state_id: 5)
            ['name' => 'Mumbai', 'state_id' => 5],
            ['name' => 'Pune', 'state_id' => 5],

            // Cities for Tamil Nadu (state_id: 6)
            ['name' => 'Chennai', 'state_id' => 6],

            // Cities for California (state_id: 7)
            ['name' => 'Los Angeles', 'state_id' => 7],
            ['name' => 'San Francisco', 'state_id' => 7],

            // Cities for New York (state_id: 8)
            ['name' => 'New York City', 'state_id' => 8],

            // Cities for Texas (state_id: 9)
            ['name' => 'Houston', 'state_id' => 9],
            ['name' => 'Dallas', 'state_id' => 9],
        ];

        City::insert($cities);
    }
}
