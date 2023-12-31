<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
/*

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('product',[ProductController::class,"index"]);
Route::post('product',[ProductController::class,"store"]);
Route::put('product/{id}',[ProductController::class,"update"]);
Route::delete('product/{id}',[ProductController::class,"destroy"]);

Route::get('category',[CategoryController::class,"index"]);
Route::post('category',[CategoryController::class,"store"]);
Route::put('category/{id}',[CategoryController::class,"update"]);
Route::delete('category/{id}',[CategoryController::class,"destroy"]);
