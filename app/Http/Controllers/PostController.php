<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	//$posts = Post::get()->paginate(3);
    	$posts = DB::table('posts')
    			->join('users', 'users.id', '=', 'posts.user_id')
    			->select('posts.*', 'users.name', 'users.email')
    			->paginate(4);
    	return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->get('title');
        $post->user()->associate($request->user());

        $post->save();

        return redirect('home');
    }
}
