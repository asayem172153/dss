<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class productFromNGOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,500) as $value){
            DB::table('product_from_ngo')->insert([
                'id'=> $value,
                'product_name'=>                $faker->randomElement(['Product-1', 'Product-2', 'Product-3', 'Product-4', 'Product-5',
                                                                    'Product-6', 'Product-7', 'Product-8', 'Product-9', 'Product-10']),
                'ngo_name'=>                    $faker->numberBetween(1, 11),
                'market_monitoring'=>           $faker->randomElement(['Yes', 'No']),
                'available_in_local_market?'=>   $faker->randomElement(['Yes', 'No']),
                'available_in_foreign_market?'=> $faker->randomElement(['Yes', 'No']),
                'market_price_local'=>          $faker->numberBetween(1000, 1000000),
                'market_price_foreign'=>        $faker->numberBetween(10000, 10000000),
            ]);
        }
    }
}
