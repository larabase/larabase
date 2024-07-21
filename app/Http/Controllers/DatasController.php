<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DatasController extends Controller
{
    public function years()
    {
        return Inertia::render('Datas/Years/Years');
    }

    public function levels()
    {
        return Inertia::render('Datas/Levels/Levels');
    }

    public function subjects()
    {
        return Inertia::render('Datas/Subjects/Subjects');
    }

    public function fees()
    {
        return Inertia::render('Datas/Fees/Fees');
    }
}
