<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    public function signin()
    {
        return view('signin');
    }
    public function login(Request $request)
    {
        $submittedFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (auth()->attempt($submittedFields)) {
            Log::info('User Logged In');
            $request->session()->regenerate(true);
            return redirect("/");
        }
        return redirect("/signin");
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function register()
    {
        return view('register');
    }

    public function signup(Request $request): Response
    {
        Log::info('Signup Request Data:', $request->all());

        $submittedFields = $request->validate([
            'name' => ['required', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique("users", "email")],
            'password' => ['required', 'min:5'],
            'username' => ['required'],
            // 'firstname' => ['required'],
            // 'lastname' => ['required'],
        ]);

        Log::info('Validated Fields:', $submittedFields);

        $submittedFields['password'] = bcrypt($submittedFields['password']);

        try {
            $user = User::create($submittedFields);
            auth()->login($user);
            Log::info('User Created Successfully');
            return redirect("/");
        } catch (Exception $e) {
            Log::error('Error Creating User: ' . $e->getMessage());
        }
    }
}
