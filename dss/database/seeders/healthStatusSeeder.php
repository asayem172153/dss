<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class healthStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,20) as $value){
            DB::table('health_status')->insert([
                'id'=> $value,
                'problem_name'=>$faker->randomElement(['Problem-1', 'Problem-2', 'Problem-3', 'Problem-4', 'Problem-5', 'Problem-6', 'Problem-7',
                                                        'Problem-8', 'Problem-9', 'Problem-10', 'Problem-11', 'Problem-12', 'Problem-13', 'Problem-14',
                                                        'Problem-15', 'Problem-16', 'Problem-17', 'Problem-18', 'Problem-19', 'Problem-20']),
                'min_treatment_duration_(days)'=>$faker->numberBetween(15, 730), //730 = 2 years
            ]);
        }
    }
}
