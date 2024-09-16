<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmploymentContractController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route to display the form
Route::get('/employment-contract', [EmploymentContractController::class, 'showForm'])->name('contract.form');

// Route to handle form submission (POST)
Route::post('/employment-contract/store', [EmploymentContractController::class, 'store'])->name('contract.store');
Route::get('/dashboard', [EmploymentContractController::class, 'showDashboard'])->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
