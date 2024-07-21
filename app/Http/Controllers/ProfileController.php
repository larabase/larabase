<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ProfileController extends Controller
{
    public function profile()
    {
        return Inertia::render('Profile/Index/Index');
    }

    public function activities()
    {
        return Inertia::render('Profile/Activities/Activities');
    }

    public function security()
    {
        return Inertia::render('Profile/Security/Security');
    }

    public function notifications()
    {
        return Inertia::render('Profile/Notifications/Notifications');
    }

    public function settings()
    {
        return Inertia::render('Profile/Settings/Settings');
    }
}
