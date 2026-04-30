<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'visiteur'
        ]);

        return redirect('/login')->with('success', 'Compte créé');
    }

    public function showLogin()
    {
        return view('login');
    }

  public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {

        $request->session()->regenerate(); 
        if (Auth::user()->role == 'bloguer') {
            return redirect('/dashboard');
        } else {
    return redirect('/articles'); 
}
    }

    return back()->with('error', 'Email ou mot de passe incorrect');
}
}