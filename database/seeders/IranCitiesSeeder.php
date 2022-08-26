<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IranCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Artisan::call('iran:import --target=cities');
    }
}
