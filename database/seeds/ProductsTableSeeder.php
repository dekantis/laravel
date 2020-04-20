<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i< 2; $i++) {
            \Illuminate\Support\Facades\DB::insert(
                'insert into products (`name`, `price`) VALUES (?, ?)',
                [
                    'Product',
                    '1234',
                ]
            );
        }
    }
}
