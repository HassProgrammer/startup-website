<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup()
    {
        return view('authentication.signup');
    }
    public function login()
    {
        return view('authentication.login');
    }
}
