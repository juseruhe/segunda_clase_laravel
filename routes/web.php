<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;

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

Route::get('company',[CompanyController::class,'index'])->name('company.index');

Route::get('company/create',[CompanyController::class,'create'])->name('company.create');

Route::post('company',[CompanyController::class,'store'])->name('company.store');

Route::delete('company/{id}',[CompanyController::class,'destroy'])->name('company.destroy');

Route::get('company/{id}',[CompanyController::class,'show'])->name('company.show');

Route::get('company/look/{id}',[CompanyController::class,'look'])->name('company.look');

Route::put('company/{id}',[CompanyController::class,'put'])->name('company.put');
