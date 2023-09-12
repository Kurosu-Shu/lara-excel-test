<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function export()
    {
        return Excel::download(new UsersExport, 'users.ods');
    }
}
