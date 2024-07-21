<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class TeachersController extends Controller
{
    public function index()
    {
        return Inertia::render('Teachers/Index/Index');
    }

    public function add()
    {
        return Inertia::render('Teachers/Add/Add');
    }
}
