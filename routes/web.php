<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addCompanyController;
use App\Http\Controllers\UserController;
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

Route::get('/add/company', [addCompanyController::class, 'addCompany'])->name('Add.company'); //add.data
Route::post('/store/company', [addCompanyController::class, 'addData'])->name('add.data');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/user', [addCompanyController::class, 'create']);
Route::post('/user', [addCompanyController::class, 'store']);
Route::get('/verify', [addCompanyController::class, 'GetVery']);
Route::post('/verify', [addCompanyController::class, 'PostVery']);
