<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ParentsController extends Controller
{
    public function index()
    {
        return Inertia::render('Parents/Index/Index');
    }

    public function add()
    {
        return Inertia::render('Parents/Add/Add');
    }
}
