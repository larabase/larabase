<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class TimetablesController extends Controller
{
    public function index()
    {
        return Inertia::render('Teachings/Timetables/Timetables');
    }
}
