<?php
namespace App\Views\Composers;

use Illuminate\View\View;

use App\Category;
use App\Post;
use App\Tag;

Class NavigationComposer
{
	public function compose(View $view)
	{
		$this->composeCategories($view);

		$this->composeTags($view);

		$this->composePopularPosts($view);
	}

	private function composeCategories(View $view)
	{

        $categories = Category::with('posts')->orderBy('title','asc')->get();
        
        $view->with('categories',$categories);
        
	}

	public function composeTags(View $view)
	{
		$tags = Tag::has('posts')->get();

		$view->with('tags', $tags);
	}

	private function composePopularPosts(View $view)
	{

        $popularPosts = Post::orderBy('view_count','desc')->take(3)->get();

        $view->with('popularPosts', $popularPosts);
	}
}