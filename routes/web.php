<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProgramController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('members', [MemberController::class, 'index'])->name('members');
    Route::get('add_member', [MemberController::class, 'create'])->name('add_member');
    Route::get('store_member', [MemberController::class, 'store'])->name('store_member');
    Route::get('delete_member', [MemberController::class, 'delete'])->name('delete_member');
    Route::get('edit_member', [MemberController::class, 'edit'])->name('edit_member');
    Route::get('update_member', [MemberController::class, 'update'])->name('update_member');
    Route::get('file_add', [MemberController::class, 'file_add'])->name('file_add');
    Route::get('process', [MemberController::class, 'process'])->name('process');

    Route::get('employees', [EmployeeController::class, 'index'])->name('employees');
    Route::get('add_employee', [EmployeeController::class, 'create'])->name('add_employee');
    Route::get('store_employee', [EmployeeController::class, 'store'])->name('store_employee');
    Route::get('delete_employee', [EmployeeController::class, 'delete'])->name('delete_employee');
    Route::get('edit_employee', [EmployeeController::class, 'edit'])->name('edit_employee');
    Route::get('update_employee', [EmployeeController::class, 'update'])->name('update_employee');


    Route::get('payments', [PaymentController::class, 'index'])->name('payments');
    Route::get('add_payment', [PaymentController::class, 'create'])->name('add_payment');
    Route::get('store_payment', [PaymentController::class, 'store'])->name('store_payment');

    Route::get('programs', [ProgramController::class, 'index'])->name('programs');
});
