<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(
        	[
        		'title' =>'mr',
            	'name' =>'John',
            	'last_name' =>'Doe',
            	'address' =>'Street 123',
            	'zip_code' =>'0606050',
            	'city' =>'Tulsa',
            	'state' =>'LA',
            	'email' =>'john@example.com',
        	]
       	);

 		DB::table('clients')->insert(
        	[
        		'title' =>'mrs',
            	'name' =>'Jane',
            	'last_name' =>'Doe',
            	'address' =>'St. Jane',
            	'zip_code' =>'12311',
            	'city' =>'LA',
            	'state' =>'LA',
            	'email' =>'jane@exlample.com',
        	]
       	);
    }
}
