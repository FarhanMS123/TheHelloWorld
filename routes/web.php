<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// ### PUBLIC ROUTES ###
Route::get('/', 'IndexController@index')->name('home');
Route::get('/sendemail', 'IndexController@index')->name('sendemail');
Route::post('/sendemail/send', 'IndexController@send')->name('send');

// ### GUEST ###########
Route::group(["middleware" => ['guest']], function(){
    Route::get("/login", "AuthController@view_login")->name("view_login");
    Route::post("/login", "AuthController@login")->name("login");

    Route::get("/register", "AuthController@view_register")->name("view_register");
    Route::post("/register", "AuthController@register")->name("register");
});

// ### AUTH VIEW
Route::group(['middleware' => ['auth']], function () {
    Route::get("/dashboard", "AuthController@view_dashboard")->name("view_dashboard");
    Route::post("/logout", "AuthController@logout")->name("logout");
});

// ### TEAM ROUTE ######
Route::group(['middleware' => ['auth', 'team']], function () {
    Route::get('/payment/{id}', 'TeamController@payment')->name('payment');
    Route::patch('/payment/{id}/pay', 'TeamController@pay')->name('pay');
    // Route::get('/dashboard/{id}', "TeamController@dashboard")->name('dashboard');
    Route::post('/dashboard/{id}/add', 'TeamController@add')->name('add_member');
});

// ### ADMIN ROUTE ####
Route::group(['middleware' => ['auth', 'admin']], function () {
    //
});
