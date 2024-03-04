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

Route::view('/home', 'home');
Route::view('/chat', 'chat');
Route::view('/room-list', 'room-list');
Route::view('/room-detail', 'room-detail');
Route::view('/bill', 'bill');
Route::view('/profil', 'profil');
Route::view('/bill-detail', 'bill-detail');
