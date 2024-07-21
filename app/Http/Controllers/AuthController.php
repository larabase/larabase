<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AuthController extends Controller
{
    public function __construct()
    {
        Inertia::setRootView('auth');
    }

    public function login()
    {
        return Inertia::render('Auth/Login');
    }

    public function register()
    {
        return Inertia::render('Auth/Register');
    }

    public function forgetPassword()
    {
        return Inertia::render('Auth/ForgetPassword');
    }
}
