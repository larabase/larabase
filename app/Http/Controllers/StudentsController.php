<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class StudentsController extends Controller
{
    public function index()
    {
        return Inertia::render('Students/Index/Index');
    }

    public function add()
    {
        return Inertia::render('Students/Add/Add');
    }
}
