<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the posts table
        DB::table('posts')->truncate();

        // generate 10 data
        $posts = [];
        $faker = Factory::create();

        for ($i=0; $i<=10; $i++) { 

	        $date = date("Y-m-d H:i:s",strtotime("2019-03-21 14:00:00 + {$i} days"));
	        $image = "Post_Image_".rand(1,5).".jpg";
        	$posts[] = [
        		'author_id' => rand(1,3),
        		'title' => $faker->sentence(rand(8,12)),
        		'excerpt' => $faker->text(rand(250,300)),
        		'body' => $faker->paragraphs(rand(10,15),true),
        		'slug' => $faker->slug(),
        		'image' => rand(1,0) == 1? $image : Null,
        		'created_at' => $date,
        		'updated_at' => $date
        	];
        }
        DB::table('posts')->insert($posts);
    }
}
