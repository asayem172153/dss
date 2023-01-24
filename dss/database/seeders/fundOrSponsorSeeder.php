<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class fundOrSponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $value){
            DB::table('fund_or_sponsor')->insert([
                'id'=> $value,
                'division_id'=>$faker->numberBetween(1, 8),
                'district_id'=>$faker->numberBetween(1, 64),
                'upazila_id'=>$faker->numberBetween(1, 491),
                'fund_amount'=>$faker->numberBetween(1000000, 100000000),
                'fund_type'=>$faker->randomElement(['Type-1', 'Type-2', 'Type-3', 'Type-4', 'Type-5',
                                                    'Type-6', 'Type-7', 'Type-8', 'Type-9', 'Type-10']),
            ]);
        }
    }
}
