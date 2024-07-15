<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }
    public function store(Request $request)
    {
        // validate
        $validatedAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(8)->numbers()->letters()],
        ]);
        // create the user
        $user = User::create($validatedAttributes);
        // log in
        Auth::login($user);
        //redirect somewhere
        return redirect('/jobs');
    }
}
