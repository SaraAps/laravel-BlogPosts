<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create(){
        return view('sessions.create');
    }
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
    public function store(){


        //validate the request
        $attributes = request()->validate([
           'email' => 'required|email',
           'password' => 'required'
        ]);
        //attempt to log in based on credentials
        //redirect with success flash message

        if(!auth()->attempt($attributes)){
            throw ValidationException::withMessages([
                'email'=> 'Your provided credentials could not be verified.'
            ]);
        }
        session()->regenerate();
        return redirect('/')->with('success', 'Welcome Back!');


//        return back()
//            ->withInput()
//            ->withErrors(['email'=> 'Your provided credentials could not be verified.']);



    }
}
