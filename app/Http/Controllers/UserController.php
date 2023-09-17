<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function signup(Request $request)
    {
        $submittedFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'username' => ['required'],
            'firstname' => ['required'],
            'lastname' => ['required'],
        ]);

        $submittedFields['password'] = bcrypt($submittedFields['password']);
        User::create($submittedFields);
        // return view('signup');
    }
}
