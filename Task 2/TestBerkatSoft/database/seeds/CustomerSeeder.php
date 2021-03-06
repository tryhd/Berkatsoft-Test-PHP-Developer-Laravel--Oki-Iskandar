<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
    	for($i = 1; $i <= 5; $i++){

    	      // insert data ke table customer menggunakan Faker
    		DB::table('customer')->insert([
    			'nama' => $faker->name,
    			'email' => $faker->email,
                'telpon' => $faker->phoneNumber,
                'alamat' => $faker->Address,
    		]);
    	}
    }
}
