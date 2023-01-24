<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class medicalTreatmentSeeder extends Seeder
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
            DB::table('medical_treatment')->insert([
                'id'=> $value,
                'name_of_the_treatment'=>$faker->randomElement(['Treatment-1', 'Treatment-2', 'Treatment-3', 'Treatment-4', 'Treatment-5', 
                                                                'Treatment-6', 'Treatment-7', 'Treatment-8', 'Treatment-9', 'Treatment-10', 
                                                                'Treatment-11', 'Treatment-12', 'Treatment-13', 'Treatment-14', 'Treatment-15', 
                                                                'Treatment-16', 'Treatment-17', 'Treatment-18', 'Treatment-19', 'Treatment-20']),
                'medical_expences'=>$faker->numberBetween(10000, 1000000),
                'is_it_expensive'=>$faker->randomElement(['Yes', 'No']),
                'medical_support_type'=>$faker->randomElement(['Monthly', 'Yearly']),
                'treatment_duration_(days)'=>$faker->numberBetween(15, 1825), //1825 = 5 years
            ]);
        }
    }
}
