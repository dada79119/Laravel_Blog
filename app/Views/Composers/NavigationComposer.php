<?php
namespace App\Views\Composers;

use Illuminate\View\View;

use App\Category;
use App\Post;

Class NavigationComposer
{
	public function compose(View $view)
	{
		$this->composeCategories($view);
		$this->composePopularPosts($view);
	}

	private function composeCategories(View $view)
	{

        $categories = Category::with('posts')->orderBy('title','asc')->get();

        $view->with('categories',$categories);
        
	}

	private function composePopularPosts(View $view)
	{

        $popularPosts = Post::orderBy('view_count','desc')->take(3)->get();

        $view->with('popularPosts', $popularPosts);
	}
}