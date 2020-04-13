<?php

use Illuminate\Database\Seeder;
use App\AddressStore;

class AddressStoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();        

        for ($i=1; $i <=100 ; $i++) { 
            DB:: table('address_stores')-> insert([ 
                'store_id' => (101 - $i),
                'street' => $faker->streetName,
                'city' => $faker->city,
                'state' => $faker->state,
                'postcode' => $faker->postcode,
             ]);    
        }  
    }
}
