<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->truncate();
        DB::table('categories')->insert([
        	[
        	'title'=>'Web Design',
        	'slug' =>'web-design'
        	],
        	[
        	'title'=>'Web Programming',
        	'slug' =>'web-programming'
        	],
        	[
        	'title'=>'Internet',
        	'slug' =>'internet'
        	],
        	[
        	'title'=>'Social Marketing',
        	'slug' =>'social-marketing'
        	],
        	[
        	'title'=>'Photography',
        	'slug' =>'photography'
        	]
    	]);

    	//update posts table data
    	for ($posts_id=1; $posts_id <= 10; $posts_id++) { 
    		$category_id = rand(1,6);

    		DB::table('posts')
    		->where('id',$posts_id)
    		->update(['category_id' => $category_id]);

    	}

    }
}
