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


Route::get('/search', function () {
    return view('search');
});

Route::get('/searchresults', function () {
    return view('searchresults');
})->name("dina");



Route::group(['prefix'=>'data', 'middleware' => ['auth:web']], function(){
    Route::get('/data-entry',[App\Http\Controllers\mainController::class , 'enter']);
    Route::get('/add',[App\Http\Controllers\mainController::class, 'add'])->name('add');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/relate/',[\App\Http\Controllers\relations::class, 'relation'])->name('mego');

Route::get('description/{part}',[\App\Http\Controllers\relations::class, 'description'])->name('description');
