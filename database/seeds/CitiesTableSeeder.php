<?php

use Illuminate\Database\Seeder;
use App\Models\{Country, City};

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Country::all() as $country) {
            factory(City::class, 1)->create([
                'country_id' => $country->id,
            ]);
        }
    }
}
