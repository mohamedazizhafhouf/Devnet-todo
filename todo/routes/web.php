<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaravelCrud;
use App\Http\Controllers\dashboard_controller;
use App\Http\Controllers\projectController;


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

Route::get('/dashboard',function(){
    return view('home');
})->middleware(['auth'])->name('dashboard');
Route::get('/projects',[dashboard_controller::class,'main']);
Route::get('/projects/new',[projectController::class,'new']);
Route::post('/projects/add',[projectController::class,'add']);

Route::post('/dashboard',[LaravelCrud::class,'add']);
Route::post('/add',[LaravelCrud::class,'add']);
Route::get('/delete/{id}',[LaravelCrud::class,'delete']);
Route::post('/update/{id}',[LaravelCrud::class,'update']);


require __DIR__.'/auth.php';
