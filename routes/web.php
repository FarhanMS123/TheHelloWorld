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

Route::get("/login", "AuthController@view_login")->name("login");
Route::post("/login", "AuthController@login");

Route::get("/register", "AuthController@view_register")->name("view_register");
Route::post("/register", "AuthController@register")->name("register");

Route::group(['middleware' => ['auth:team']], function () {
    Route::get("/dashboard", "TeamController@dashboard")->name("team_dashboard");
});

// Route::group(['middleware' => ['auth', 'admin']], function () {
//     //
// });

// Route::get('/', function () {
//     return view('welcome_example');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
