<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|min:2|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|min:3|max:255|unique:users,email',
            'password' => 'required|max:255'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created!');
    }
}
