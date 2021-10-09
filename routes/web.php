<?php

use App\Http\Controllers\ContactController;
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

Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/check', function () {
     return '404 Not Found';
});
Route::post('/check', [ContactController::class, 'check']);
Route::get('/thanks', function () {
    return  '404 Not Found';
});
Route::get('/admin', function () {
    return view('admin');
});

