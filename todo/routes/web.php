<?php

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

<<<<<<< HEAD
Route::get('/dashboard',[LaravelCrud::class,'getIndex']);

Route::post('/add',[LaravelCrud::class,'add']);
Route::post('/get',[LaravelCrud::class,'get']);

=======
>>>>>>> parent of 3a326b2 (add task done)
require __DIR__.'/auth.php';
