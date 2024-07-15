<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller

{
    public function create()
    {
        return view('auth/login');
    }
    public function store(Request $request)
    {
        //validate
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        //attempt to login
        if ( ! Auth::attempt($attributes))
        {
            throw ValidationException::withMessages([
                'notification' => __('Invalid email or password')
            ]);
        }
        // if ok regenerate sission token
        request()->session()->regenerate();
        //redirect
        return redirect()->intended('/jobs');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
