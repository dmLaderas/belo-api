<?php

namespace Belo\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->to('/');
        }

        return redirect()
            ->action('AuthController@index')
            ->withErrors(['auth' => 'Invalid username or password']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
