<?php

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    
    public function run()
    {
       $faker = Faker\Factory::create();        

       for ($i=1; $i <=100 ; $i++) { 
        $name = $faker->unique()->company;
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));
            DB:: table('stores')-> insert([ 
                'user_id' => (101 - $i),
                'name' => $name,
                'description' => $faker->text($maxNbChars = 200),
                'phone' => $faker->tollFreePhoneNumber,
                'mobile_phone' => $faker->e164PhoneNumber,
                'slug' => $slug
            ]);    
       }  
    }
}
