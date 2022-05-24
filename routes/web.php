<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/products/new', [ProductsController::class, 'create']);
Route::post('/products/new', [ProductsController::class, 'store'])->name('register_product');
Route::get('/products/show/{id}', [ProductsController::class, 'show']);
Route::get('/products/', [ProductsController::class, 'index']);
Route::get('/products/edit/{id}', [ProductsController::class, 'edit']);
Route::put('/products/update/{id}', [ProductsController::class, 'update'])->name('update_product');
Route::get('/products/delete/{id}', [ProductsController::class, 'delete']);
Route::delete('/products/delete/{id}', [ProductsController::class, 'destroy'])->name('delete_product');
