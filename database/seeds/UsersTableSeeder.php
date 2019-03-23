<?php

use Illuminate\Database\Seeder;

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
        #DB::table('users')->truncate();

        // generate 3 users
        DB::table('users')->insert([
        	[
        		'name' => "John Doe",
        		'email' => "johndoe@test.com",
        		'password' => bcrypt('secret')
        	],
        	[
        		'name' => "Jane Doe",
        		'email' => "janeoe@test.com",
        		'password' => bcrypt('secret')
        	],
        	[
        		'name' => "Edo Doe",
        		'email' => "edodoe@test.com",
        		'password' => bcrypt('secret')
        	]
        ]);
    }
}
