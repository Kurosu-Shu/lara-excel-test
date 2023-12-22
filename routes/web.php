<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InvoicesController;
use Carbon\Carbon;
use App\Models\Invoice;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $invoice = Invoice::get();

    return response()->json([
        "data" => $invoice
    ]);
});

Route::get('users/export/', [UsersController::class, 'export']);

Route::get('users/import/view', [UsersController::class, 'viewImport']);

Route::post('users/import/', [UsersController::class, 'import'])->name('users.import');

//invoices
Route::get('invoices/view', [InvoicesController::class, 'view']);
Route::get('invoices/export/', [InvoicesController::class, 'export']);

