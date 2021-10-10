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
Route::get('/contact/check', function () {return abort('403', 'Forbidden');});
Route::post('/contact/check', [ContactController::class, 'check']);
Route::post('/contact/create', [ContactController::class, 'create']);
Route::get('/contact/thanks', [ContactController::class, 'thanks']);
Route::get('/admin', [ContactController::class, 'admin']);
Route::post('/admin/delete', [ContactController::class, 'delete']);

