<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class sportsForPWDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,31) as $value){
            DB::table('sports_for_pwd')->insert([
                'id'=> $value,
                'sports_type'=>     $faker->randomElement(['Wheelchair Basketball', 'Wheelchair Rugby', 'Wheelchair Football', 'Wheelchair Cricket',
                                                            'Wheelchair Tennis', 'Wheelchair Curling', 'Wheelchair Dancing', 'Powerchair Football',
                                                            'Power Hockey', 'Sledge Hockey', 'Sitting Volleyball', 'Seatball', 'Para Badminton',
                                                            'Goalball', 'Torball', 'Showdown', 'Swish', 'Wheelchair Racing', 'Wheelchair Fencing', 'Swimming',
                                                            'Archery', 'Bowling', 'Fishing', 'Shooting', 'Pool', 'Sailing', 'Scuba', 'Table tennis']),
                'national_level'=>  $faker->randomElement(['Yes', 'No']),
            ]);
        }
    }
}
