<?php

use Illuminate\Database\Seeder;
use App\Models\{Company, City};
class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (City::all() as $city) {
            factory(Company::class, 1)->create([
                'city_id' => $city->id,
            ]);
        }
    }
}
