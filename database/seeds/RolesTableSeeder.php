<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Create Admin role
    	$admin = new Role();
    	$admin->name = "admin";
    	$admin->display_name = "Admin";
    	$admin->save();

    	// Create Editor role
    	$editor = new Role();
    	$editor->name = "editor";
    	$editor->display_name = "Editor";
    	$editor->save();

    	// Create Author role
    	$autor = new Role();
    	$autor->name = "author";
    	$autor->display_name = "Author";
    	$autor->save();

    	// Attach the roles
    	// First user as admin
    	$user1 = User::find(1);
    	$user1->attachRole($admin);
    	

    	// Second user as editor
    	$user2 = User::find(2);
    	$user2->attachRole($editor);
    	

    	// Third user as authoer
    	$user3 = User::find(3);
		$user3->attachRole($autor);

        
    }
}
