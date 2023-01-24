<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class interestSkillSpecialskillSeeder extends Seeder
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
            DB::table('interest_skill_specialskill')->insert([
                'id'=> $value,
                'skill_name'=>$faker->randomElement(['Interest-1', 'Interest-2', 'Interest-3', 'Interest-4', 'Interest-5',
                                                    'Skill-1', 'Skill-2', 'Skill-3', 'Skill-4', 'Skill-5', 'Skill-6', 'Skill-7', 'Skill-8', 'Skill-9', 'Skill-10',
                                                    'SpecialSkill-1', 'SpecialSkill-2', 'SpecialSkill-3', 'SpecialSkill-4', 'SpecialSkill-5']),
                'min_time_needs_to_achive_this_skill_(days)'=>$faker->numberBetween(50, 100),
                'is_training_available'=>$faker->randomElement(['Yes', 'No']),
            ]);
        }
    }
}
