<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
public function index()
    {
        return view('doctor');
    }
    public function details()
    {
        return view('details');
    }

    public function showLogin()
    {
        return view('auth.login'); // Blade file for login form
    }

    public function showRegister()
    {
        return view('auth.register'); // Blade file for register form
    }
}
