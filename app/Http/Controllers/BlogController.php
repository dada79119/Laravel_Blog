<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use App\Tag;
use DB;

class BlogController extends Controller
{
	protected $limit = 5;
    public function index(){

    	$posts = Post::with('author', 'tags', 'category')
                ->orderBy('created_at','desc')
                ->filter(request('term'))
                ->paginate($this -> limit);
        
        return view('blog.index',compact('posts'));
    	
    }

    public function category(Category $category){

        $posts = $category  ->posts()
                            ->with('author', 'tags')
                            ->orderBy('created_at','desc')
                            ->paginate($this -> limit);
        
        return view('blog.index',compact('posts'));
    }

    public function show(Post $post)
    {
    	
        $post->increment('view_count');

    	return view("blog.show",compact('post'));
    }

    public function author(User $author)
    {
        $posts = $author->posts()
                        ->with('category', 'tags')
                        ->orderBy('created_at','desc')
                        ->paginate($this -> limit);
        
        return view('blog.index',compact('posts'));
    }

    public function tag(Tag $tag){

        $tagName = $tag->title;

        $posts = $tag->posts()
                     ->with('author', 'tags')
                     ->orderBy('created_at','desc')
                     ->paginate($this -> limit);
        
        return view('blog.index',compact('posts','tagName'));
    }
}
