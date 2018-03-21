<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        if(! auth()->attempt(request(['email', 'password'])))
        {
            return back();
        }
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
