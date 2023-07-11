<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/indexx', [HomeController::class, 'indexx'])->name('indexx');