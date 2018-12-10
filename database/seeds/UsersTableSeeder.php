<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //let's clear the users table first 
        User::truncate();
        $faker = \Faker\Factory::create();

        /**
         * Let's male sure everyone has the same password and let's hash it before the loop, or else our seeder
         */
        $password = Hash::make('admin123');

        User::create([
        	'name'			=>	'Administrator',
        	'email'			=>	'admin@gmail.com',
        	'password'	=>	$password,
        ]);

        // And now let's generate a few dozen users foe our app
        for ($i=0; $i < 10 ; $i++) { 
        	User::create([
        		'name'	=>	$faker->name,
        		'email'	=>	$faker->email,
        		'password'	=>	$password
        	]);
        }
    }
}
