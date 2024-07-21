<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ClassesController extends Controller
{
    public function index()
    {
        return Inertia::render('Teachings/Classes/Index/Index');
    }

    public function add()
    {
        return Inertia::render('Teachings/Classes/Add/Add');
    }
}
