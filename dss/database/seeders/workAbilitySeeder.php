<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class workAbilitySeeder extends Seeder
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
            DB::table('work_ability')->insert([
                'id'=> $value,
                'working_type_name'=>$faker->randomElement(['Type-1', 'Type-2', 'Type-3', 'Type-4', 'Type-5',
                                                    'Type-6', 'Type-7', 'Type-8', 'Type-9', 'Type-10'])
            ]);
        }
    }
}
