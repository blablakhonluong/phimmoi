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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 
[App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/cate',
[App\Http\Controllers\CategoryController::class,'index'])
->name('cate.index');

Route::get('/admin/cate/create',[App\Http\Controllers\CategoryController::class,'create'])
->name('cate.create');