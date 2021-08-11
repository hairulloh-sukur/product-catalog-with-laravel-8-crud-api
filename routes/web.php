<?php

use App\Http\Controllers\ProductController;
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

// * read
Route::get('/products', [ProductController::class, 'index'] );

// * create
Route::get('/products/create', [ProductController::class, 'create'] );
Route::post('/products', [ProductController::class, 'store']);

// * update
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']); 

// * delete
Route::delete('/products/{id}', [ProductController::class, 'destroy']);