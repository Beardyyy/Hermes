<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        $content = "Auth.login";

        return view('welcome', compact('content'));
    }

    public function store()
    {
        $user = User::where('email',\request('email'))->first();

        if($user){
            \auth()->login($user);

            return view('welcome')->with('content', 'posts.home');
        }


        return redirect()->back();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
