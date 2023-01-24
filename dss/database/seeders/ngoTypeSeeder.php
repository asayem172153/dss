<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ngoTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,11) as $value){
            DB::table('ngo_type')->insert([
                'id'=> $value,
                'ngo_name'=>            $faker->randomElement(['BRAC', 'ASA', 'Caritas Bangladesh', 'CARE Bangladesh', 'BURO Bangladesh', 'Shakti Foundation',
                                                            'Jagorani Chakra Foundation (JCF)', 'TMSS (Thengamara Mohila Sabuj Sangha)', 'Oxfam in Bangladesh',
                                                            'Wikimedia Foundation (WMF)', 'Others']),
                'total_listed_member'=> $faker->numberBetween(0, 10),
                'type_name'=>           $faker->randomElement(['Type-1', 'Type-2', 'Type-3', 'Type-4', 'Type-5',
                                                            'Type-6', 'Type-7', 'Type-8', 'Type-9', 'Type-10', 'Others Type']),
            ]);
        }
    }
}
