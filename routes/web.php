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

Route::get('advancedsearch/',[\App\Http\Controllers\relations::class, 'advancedsearch'])->name('advancedsearch');


############################# AJAX ##############################

Route::get('equipmentType/{thedata}',[\App\Http\Controllers\relations::class,'equipmentType']);


Route::get('getCompanies/{mydata}',[\App\Http\Controllers\relations::class,'getCompanies']);

Route::get('getData/{finaldata}',[\App\Http\Controllers\relations::class,'getData']);

Route::get('make/{equipmentTypeID}',[\App\Http\Controllers\relations::class,'getMake']);

Route::get('model/{makeID}',[\App\Http\Controllers\relations::class,'getmodel']);

Route::get('modelsn/{modelID}',[\App\Http\Controllers\relations::class,'getmodelsn']);

Route::get('enginemanu/{modelID}',[\App\Http\Controllers\relations::class,'enginemanu']);

############################# AJAX ##############################

