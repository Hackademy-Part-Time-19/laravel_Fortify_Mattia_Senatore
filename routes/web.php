<?php

use App\Http\Controllers\articoli;
use App\Http\Controllers\homepage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[homepage::class,'home'])->name('homepage');

Route::get('/articoli',[articoli::class,'index'])->name('articoli');

Route::get('/test',[articoli::class,'saveToDatabase'])->name('insert');

Route::get('/articoli/create',[articoli::class,'create'])->name('articoli.create');

Route::post('/articoli/store',[articoli::class,'store'])->name('articoli.store');