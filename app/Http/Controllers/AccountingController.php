<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AccountingController extends Controller
{
    public function index()
    {
        return Inertia::render('Accounting/Solde/Solde');
    }

    public function payments()
    {
        return Inertia::render('Accounting/Payments/Index/Index');
    }

    public function addPayment()
    {
        return Inertia::render('Accounting/Payments/Add/Add');
    }

    public function invoices()
    {
        return Inertia::render('Accounting/Invoices/Invoices');
    }
}
