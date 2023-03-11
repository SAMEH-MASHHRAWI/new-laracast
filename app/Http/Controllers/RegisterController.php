<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7'
        ]);

        $user = User::create($attributes);
        auth()->login($user);
        session()->flash('success', 'You Are Already Join');
        return redirect('/');

        // dd('Sameh The Best Laravel Devloper');
    }
}
