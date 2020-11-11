<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Product_type\Product_typeController;
use App\Http\Controllers\Product\ProductController;
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
/*
 * Rutas vista company
 */
Route::get('company',[CompanyController::class,'index'])->name('company.index');
Route::get('company/create',[CompanyController::class,'create'])->name('company.create');
Route::post('company',[CompanyController::class,'store'])->name('company.store');
Route::get('company/{id}',[CompanyController::class,'show'])->name('company.show');
Route::get('company/edit/{id}',[CompanyController::class,'edit'])->name('company.edit');
Route::put('company/update/{id}',[CompanyController::class,'update'])->name('company.update');
Route::get('company/delete/{id}',[CompanyController::class,'delete'])->name('company.delete');
Route::delete('company/destroy/{id}',[CompanyController::class,'destroy'])->name('company.destroy');
/*
 * Vistas rutas product-type
 */
Route::get('product_type',[Product_typeController::class,'index'])->name('product_type.index');
Route::post('product_type',[Product_typeController::class,'store'])->name('product_type.store');
Route::get('product_type/create',[Product_typeController::class,'create'])->name('product_type.create');
Route::get('product_type/{id}',[Product_typeController::class,'show'])->name('product_type.show');
Route::get('product_type/edit/{id}',[Product_typeController::class,'edit'])->name('product_type.edit');
Route::put('product_type/update/{id}',[Product_typeController::class,'update'])->name('product_type.update');
Route::get('product_type/delete/{id}',[Product_typeController::class,'delete'])->name('product_type.delete');
Route::delete('product_type/destroy/{id}',[Product_typeController::class,'destroy'])->name('product_type.destroy');
/*
 * routes products
 */
Route::get('products',[ProductController::class,'index'])->name('product.index');
Route::post('products',[ProductController::class,'store'])->name('product.store');
Route::get('products/create',[ProductController::class,'create'])->name('product.create');
Route::get('products/{id}',[ProductController::class,'show'])->name('product.show');
Route::get('products/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('products/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('products/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Route::delete('products/destroy/{id}',[ProductController::class,'destroy'])->name('product.destroy');

