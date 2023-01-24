<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class trainingDemandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,50) as $value){
            DB::table('training_demand')->insert([
                'id'=> $value,
                'address'=>$faker->address(),
                'upazila_id'=>$faker->numberBetween(1, 491),
                'training_type'=>$faker->numberBetween(1, 10),
                'demand'=>$faker->numberBetween(100000, 10000000),
            ]);
        }
    }
}
