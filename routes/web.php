<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\beusersController;

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
//login routs
Route::get('admin/login', [beusersController::class, 'login']);
//dashboard routs
Route::get('admin', [beusersController::class, 'index']);
//submit login routs
Route::post('admin/login', [beusersController::class, 'submit_login']);
//logout routs
Route::get('admin/logout', [beusersController::class, 'logout']);

