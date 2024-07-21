<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class InvoicesController extends Controller
{
    public function index()
    {
        return Inertia::render('Accounting/Invoices/Invoices');
    }
}
