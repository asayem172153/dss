<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class trainingSeeder extends Seeder
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
            DB::table('training')->insert([
                'id'=> $value,
                'training_name'=>$faker->randomElement(['Training-1', 'Training-2', 'Training-3', 'Training-4', 'Training-5',
                                                        'Training-6', 'Training-7', 'Training-8', 'Training-9', 'Training-10',]),
                'training_date'=>$faker->date(),
                'no_of_trainee_perticipated'=>$faker->numberBetween(50, 100),
                'training_type'=>$faker->numberBetween(1, 10),
                'address'=>$faker->address(),
                'upazila_id'=>$faker->numberBetween(1, 491),
            ]);
        }
    }
}
