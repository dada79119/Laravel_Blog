<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// reset users table
        // DB::table('users')->truncate();

        $faker = Factory::create();
        // generate 3 users
        DB::table('users')->insert([
        	[
        		'name' => "John Doe",
                'slug' => 'John-doe',
        		'email' => "johndoe@test.com",
        		'password' => bcrypt('secret'),
                'bio' => $faker->text(rand(250,300)),
        	],
        	[
        		'name' => "Jane Doe",
                'slug' => 'Jane-doe',
        		'email' => "janeoe@test.com",
        		'password' => bcrypt('secret'),
                'bio' => $faker->text(rand(250,300)),
        	],
        	[
        		'name' => "Edo Doe",
                'slug' => 'Edo-doe',
        		'email' => "edodoe@test.com",
        		'password' => bcrypt('secret'),
                'bio' => $faker->text(rand(250,300)),
        	]
        ]);
    }
}
