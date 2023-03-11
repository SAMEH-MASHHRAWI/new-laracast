<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{



    public function create()
    {
        return view('session.create');
    }


    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);

        if ( auth()->attempt($attributes)) {
            // dd($attributes);
            throw ValidationException::withMessages([
                'email' => 'You Are Not Log In, Cheek Out'
            ]);
        }
        session()->regenerate();
        return redirect('/')->with('sameh welcome');


    }


    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('Good Bay');
    }
}
