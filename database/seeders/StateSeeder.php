<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            // States for Bangladesh (country_id: 1)
            ['name' => 'Dhaka', 'country_id' => 1],
            ['name' => 'Chittagong', 'country_id' => 1],
            ['name' => 'Khulna', 'country_id' => 1],

            // States for India (country_id: 2)
            ['name' => 'West Bengal', 'country_id' => 2],
            ['name' => 'Maharashtra', 'country_id' => 2],
            ['name' => 'Tamil Nadu', 'country_id' => 2],

            // States for United States (country_id: 3)
            ['name' => 'California', 'country_id' => 3],
            ['name' => 'New York', 'country_id' => 3],
            ['name' => 'Texas', 'country_id' => 3],
        ];

        State::insert($states);
    }
}
