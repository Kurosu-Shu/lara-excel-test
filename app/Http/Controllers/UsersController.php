<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function export()
    {
        return Excel::download(new UsersExport, 'users.ods');
    }

    //import page

    public function viewImport() {

        return view('importPage');
    }

    public function import(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file') );

        return redirect('/')->with('success', 'All good!');
    }
}
