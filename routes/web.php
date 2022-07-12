<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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

Route::get('/homepage',[CrudController::class, 'index'])->name("index");
Route::get('/contactUs',[CrudController::class, 'contactUs'])->name("contactUs");
Route::post('/contactUs',[CrudController::class, 'contactDB']);
Route::get('/customer',[CrudController::class, 'customer'])->name("customer");

Route::get('/customer/{id}/edit',[CrudController::class, 'customerEdit']); 
Route::post('/customer/{id}/edit',[CrudController::class, 'customerUpdate']);
Route::get('/customer/{id}/Delete',[CrudController::class, 'customerDelete']);


Auth::routes();


//for disabling certain routes
// Auth::routes([                   
//     'register' => false,
//     'login' => false,
// ]);


Route::get('/home', [App\Http\Controllers\CrudController::class, 'index'])->name('home');


