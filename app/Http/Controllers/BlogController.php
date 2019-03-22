<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
	protected $limit = 5;
    public function index(){
    	//\DB::enableQueryLog();
    	$posts = Post::with('author')->orderBy('created_at','desc')->paginate($this -> limit);
    	#$posts = Post::with('author')->orderBy('created_at','desc')->Simplepaginate(3);
    	return view('blog.index',compact('posts'));
    	//dd(\DB::getQueryLog());
    }
}
