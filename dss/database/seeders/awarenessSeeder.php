<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class awarenessSeeder extends Seeder
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
            DB::table('awareness')->insert([
                'id'=> $value,
                'date'=>$faker->date(),
                'awareness_type'=>$faker->numberBetween(1, 10),
                'perticipated'=>$faker->numberBetween(1, 50),
                'address'=>$faker->address(),
                'upazila_id'=>$faker->numberBetween(1, 491),
            ]);
        }
    }
}
