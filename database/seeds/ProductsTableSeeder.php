<?php

use Illuminate\Database\Seeder;
use App\Models\{Company, Product, User};

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Company::all() as $company) {
            foreach (User::all() as $user) {
                factory(Product::class, 1)->create([
                    'company_id' => $company->id,
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
