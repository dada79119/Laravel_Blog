<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use DB;

class BlogController extends Controller
{
	protected $limit = 5;
    public function index(){

    	// \DB::enableQueryLog();
    	$posts = Post::with('author')->orderBy('created_at','desc')->paginate($this -> limit);
        // dd(\DB::getQueryLog());
        return view('blog.index',compact('posts'));
    	
    }

    public function category(Category $category){
        
        $posts = $category  ->posts()
                            ->with('author')
                            ->orderBy('created_at','desc')
                            ->paginate($this -> limit);
        
        return view('blog.index',compact('posts'));
    }

    public function show(Post $post)
    {
    	// $post = Post::FindOrFail($id);
    	return view("blog.show",compact('post'));
    }
}
