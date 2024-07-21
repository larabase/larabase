<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class PaymentsController extends Controller
{
    public function index()
    {
        return Inertia::render('Accounting/Payments/Index/Index');
    }

    public function add()
    {
        return Inertia::render('Accounting/Payments/Add/Add');
    }
}
