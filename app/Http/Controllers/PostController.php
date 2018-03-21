<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except(['/', 'about', 'blog', 'blog{id}', 'contact']);
    }

    //Shows home page
    public function index()
    {
        $content = Post::$master;
        return view('welcome', compact('content'));
    }




    //Shows about page
    public function showAbout()
    {
        $content = Post::$about;
        return view('welcome', compact('content'));
    }




    //Shows blog page, andr renders all posts
    public function showBlog()
    {
        $posts = Post::latest()->get();
        $content = Post::$blog;
        return view('welcome', compact('content', 'posts'));
    }




    //Shows contact page
    public function showContact()
    {
        $content = Post::$contact;
        return view('welcome', compact('content'));
    }




    //Shows blog page with only one selected post
    public function showPost($id)
    {
        $pos = Post::find($id);
        $content = Post::$post;
        return view('welcome', compact('content', 'pos'));
    }






    //Shows page for new post creation
    public function create()
    {
        //$pos = Post::find($id);
        $content = Post::$create;
        return view('welcome', compact('content'));
    }




    //This function create, save and validate new post
    public function store()
    {
        $this->validate(request(), [

            'title' => 'required',
            'subTitle' => 'required',
            'body' => 'required',
            'img' => 'required'
        ]);

        Post::create(request(['title', 'subTitle', 'body', 'img']));

        return redirect('/');

    }


}
