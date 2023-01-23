<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class widowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,500) as $value){
            DB::table('widow')->insert([
                'id'=> $value,
                'name'=>                        $faker->name(),
                'age'=>                         $faker->numberBetween(12, 99),
                'enrolled_date'=>               $faker->dateTimeBetween(),
                'educational_qualification'=>   $faker->randomElement(['PSC',
                                                                    'JSC', 'JDC',
                                                                    'SSC', 'Dakhil', 'SSC (Vocational)',
                                                                    'HSC', 'Alim', 'HSC (Vocational)',
                                                                    'Diploma',
                                                                    'BSc', 'B.Arch', 'B Ed', 'B Pharm', 'BSS', 'BDS', 'BES', 'LLB', 'MBBS', 'BBA', 'BA', 'BCom', 'Honours',
                                                                    'MSc', 'M.Arch', 'M Pharm', 'MSS', 'MES', 'LLM', 'MBA', 'MA', 'MCom', 'Masters',
                                                                    'PhD', 'Post Doc']),
                'occupation'=>                  $faker->randomElement(['Accountant', 'Actor', 'Actress', 'Advocate', 'Agent', 'Architect', 'Artist',
                                                                    'Author', 'Baker', 'Barber', 'Blacksmith', 'Boatman', 'Book Binder',
                                                                    'Broker', 'Bus driver', 'Butcher', 'Carpenter', 'Carrier', 'Cashier', 'Chemist',
                                                                    'Cleaner', 'Clerk', 'Coachman', 'Cobbler', 'Collector', 'Compositor', 'Compounder',
                                                                    'Conductor', 'Confectioner', 'Contractor', 'Cook', 'Coolie', 'Craftsman', 'Dancer', 'Dentist',
                                                                    'Designer', 'Doctor', 'Dramatist', 'Druggist', 'Editor', 'Electrician', 'Engineer', 'Examiner',
                                                                    'Farmer', 'Fireman', 'Fisherman', 'Florist', 'Gardener', 'Goldsimth', 'Hairdresser', 'Hawker',
                                                                    'Inspector', 'Jeweller', 'Journalist', 'Judge', 'Labourer', 'Landlord', 'Lawyer', 'Lecturer',
                                                                    'Librarian', 'Magician', 'Manager', 'Mason', 'Mechanic', 'Merchant', 'Midwife', 'Milkman', 'Minister',
                                                                    'Model', 'Musician', 'News reader', 'Newspaper vendor', 'Novelist', 'Nurse', 'Operator',
                                                                    'Optician', 'Painter', 'Peon', 'Perfumer', 'Pharmacist', 'Photographer', 'Physician', 'Pilot',
                                                                    'Plumber', 'Poet', 'Policeman', 'Politician', 'Postman', 'Potter', 'Priest', 'Printer',
                                                                    'Proprietor', 'Prose Writer', 'Publisher', 'Real estate agent', 'Receptionist', 'Retailer',
                                                                    'Sailor', 'Sanitary Inspector', 'Scientist', 'Sculptor', 'Secretary', 'Shoemaker', 'Shop assistant',
                                                                    'Shopkeeper', 'Soldier', 'Surgeon', 'Sweeper', 'Tailor', 'Teacher', 'Translator', 'Travel agent',
                                                                    'Treasurer', 'Veterinary doctor', 'Waiter', 'Watchman', 'Weaver', 'Workers', 'Writer']),
                'interest/skill/special_skill'=>$faker->numberBetween(1, 20),
                'monthly_income'=>              $faker->numberBetween(10000, 1000000),
                'income_source'=>               $faker->randomElement(['Source-1', 'Source-2', 'Source-3', 'Source-4', 'Source-5', 'Source-6', 'Source-7', 'Source-8',
                                                                    'Source-9', 'Source-10', 'Source-11', 'Source-12', 'Source-13', 'Source-14', 'Source-15']),
                'job_experience'=>              $faker->numberBetween(1, 10),
                'type_of_wealth'=>              $faker->numberBetween(1, 15),
                'depended_on'=>                 $faker->numberBetween(1, 500),
                'depends_on_her'=>              $faker->numberBetween(1, 500),
                'working_ability'=>             $faker->numberBetween(1, 10),
                'date_of_being_widowed'=>       $faker->dateTimeBetween('-20 years', 'now'),
                'number_of_remarriage'=>        $faker->numberBetween(2, 6),
                'health_status'=>               $faker->numberBetween(1, 20),
            ]);
        }
    }
}
