<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelCrud;

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

Route::get('/dashboard', [LaravelCrud::class,'get'])->middleware(['auth'])->name('dashboard');

Route::post('/dashboard',[LaravelCrud::class,'add']);
Route::post('/add',[LaravelCrud::class,'add']);

require __DIR__.'/auth.php';
