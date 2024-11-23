<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');//// we return as view with name in view foloder
    // view mean link to view in folder
    //// some in notepad laravel 9-11

});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact'); 
});

Route::get('/service', [ServiceController::class, 'service']);
Route::get('/list', [UserController::class, 'list']);
////////////////////////////////////////////////////////////////////////////////////////
Route::get('/create', [UserController::class, 'create']);/// for user button
Route::post('/create', [UserController::class, 'store']);/// link with create
///////////////////////////////////////////////////////////////////////////////////////
Route::get('/edit/{id}', [UserController::class, 'edit']);/// link with create
Route::post('/edit/{id}', [UserController::class, 'update']);/// link with create

Route::delete('/delete/{id}', [UserController::class, 'destroy']);




