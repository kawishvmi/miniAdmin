<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route for Companies
Route::resource('companies', CompanyController::class);

// Route for Employees
Route::resource('employees', EmployeeController::class);


Route::get('/companies', function () {
    return view('companies/companies');
});




Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');


Route::get('/employees', [CompanyController::class, 'index'])->name('employees.index');


// Route::get('/employees', [EmployeeController::class, 'index']);

// Route::get('/employees', function () {
//     return view('employees');
// });


// Define resourceful routes for the Company model
Route::resource('companies', CompanyController::class);

// Add the "create" and "edit" routes for companies with the 'auth' middleware
Route::group(['middleware' => 'auth'], function () {
    Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
    Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
});

// Define resourceful routes for the Employee model
Route::resource('employees', EmployeeController::class);

// Add the "create" and "edit" routes for employees with the 'auth' middleware
Route::group(['middleware' => 'auth'], function () {
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
});
