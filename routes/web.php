<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HtmlFormController;
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

// Route::get("users",[UsersController::class,'loadView']);

// Route::view("users","users");
 
// Route::view("user","users");

// Route::post("users",[HtmlFormController::class,'getData']);
// Route::view("login","formUsers");

Route::view("noaccess","test3");