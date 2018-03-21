<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{


    //Shows registration form
    public function create()
    {
       $content = "Auth.registration";

       return view('welcome', compact('content'));

    }


    //Create new user, validate, save and redirect
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect('/');
    }
}
