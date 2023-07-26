<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('realisation')->group(function () {
    Route::get('/', function(){
        return view("admin.realisation.index");
    })->name('admin.realisation.index'); 

    Route::get('/creation', function(){
        return view('admin.realisation.create'); 
    })->name('admin.realisation.create');
});
