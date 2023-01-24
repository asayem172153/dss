<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class disabilitySeeder extends Seeder
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
            DB::table('disability')->insert([
                'id'=> $value,
                'disability_name'=>$faker->randomElement(['Hearing Impairment', 'Visual Impairment', 'Physical Impairment', 'Intellectual Impairment',
                                                            'Learning Impairment', 'Neuro Diversity', 'Psychosocial Impairment', 'Speech Impairment',
                                                            'Accidental Cases', 'Other dissability']),
                'supporting_tools'=>$faker->randomElement(['Tool-1', 'Tool-2', 'Tool-3', 'Tool-4', 'Tool-5', 
                                                            'Tool-6', 'Tool-7', 'Tool-8', 'Tool-9', 'Others']),
                'treatment_available'=>$faker->randomElement(['Yes', 'No']),
                'recovery_time'=>$faker->numberBetween(15, 365),
            ]);
        }
    }
}
