<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        // nanti isi autentikasi
    }

    public function register(Request $request)
    {
        // nanti isi pendaftaran
    }

    public function logout()
    {
        // nanti isi logout
    }

}
