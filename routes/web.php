<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Product_Types\Product_Types_Controller;
use App\Http\Controllers\Products\ProductsController;
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

// Rutas de Compañias

Route::get('company',[CompanyController::class,'index'])->name('company.index');
Route::get('company/create',[CompanyController::class,'create'])->name('company.create');
Route::post('company',[CompanyController::class,'store'])->name('company.store');
Route::delete('company/{id}',[CompanyController::class,'destroy'])->name('company.destroy');
Route::get('company/{id}',[CompanyController::class,'show'])->name('company.show');
Route::get('company/edit/{id}',[CompanyController::class,'edit'])->name('company.edit');
Route::put('company/{id}',[CompanyController::class,'update'])->name('company.update');

// Rutas de Tipos de Producto

Route::get('product_types',[Product_Types_Controller::class,'index'])->name('product_types.index');
Route::get('product_types/create',[Product_Types_Controller::class,'create'])->name('product_types.create');
Route::post('product.types',[Product_Types_Controller::class,'store'])->name('product_types.store');
Route::get('product_types/{id}',[Product_Types_Controller::class,'show'])->name('product_types.show');
Route::get('product_types/edit/{id}',[Product_Types_Controller::class,'edit'])->name('product_types.edit');
Route::put('product_types/{id}',[Product_Types_Controller::class,'update'])->name('product_types.update');
Route::delete('product_types/{id}',[Product_Types_Controller::class,'destroy'])->name('product_types.destroy');

// Rutas de Productos

Route::get('products/create',[ProductsController::class,'create'])->name('products.create');
Route::post('products',[ProductsController::class,'store'])->name('products.store');
Route::get('products',[ProductsController::class,'index'])->name('products.index');
Route::get('products/{id}',[ProductsController::class,'show'])->name('products.show');
Route::get('products/edit/{id}',[ProductsController::class,'edit'])->name('products.edit');
Route::put('products/{id}',[ProductsController::class,'update'])->name('products.update');

