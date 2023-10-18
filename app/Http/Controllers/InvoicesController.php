<?php

namespace App\Http\Controllers;

use App\Exports\InvoicesExport;
use Maatwebsite\Excel\Facades\Excel;

class InvoicesController extends Controller
{
    public function export()
    {
        return Excel::download(new InvoicesExport, 'invoices.pdf');
    }

    public function view() {
        return "test";
    }
}
