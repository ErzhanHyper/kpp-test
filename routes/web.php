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

Auth::routes();

Route::group(['middleware' => 'auth'],function() {
    Route::get('/home', [App\Http\Controllers\ContactController::class, 'index'])->name('home');
    Route::get('/user_contact/add/{id}', [App\Http\Controllers\UserContactController::class, 'store'])->name('user_contact_add');
    Route::get('/user_contact/delete/{id}', [App\Http\Controllers\UserContactController::class, 'destroy'])->name('user_contact_delete');
    Route::get('/user_contacts', [App\Http\Controllers\UserContactController::class, 'index'])->name('user_contacts');
});
