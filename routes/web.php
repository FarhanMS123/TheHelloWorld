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
    Route::get('/payment', 'TeamController@payment')->name('payment');
    Route::get('/timeline', 'TeamController@timeline')->name('timeline');
    Route::patch('/payment/pay', 'TeamController@pay')->name('pay');
    Route::post('/dashboard/add', 'TeamController@add')->name('add_member');
});

// ### ADMIN ROUTE ####
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get("/dashboard/payment", "AdminController@index_payment")->name("index_payment");
    Route::get("/dashboard/teams", "AdminController@index_teams")->name("index_teams");

    Route::get("/dashboard/team/{id}", "AdminController@view_team")->name("view_team");
    Route::get("/dashboard/team/e/{id}", "AdminController@view_edit_team")->name("view_edit_team");
    Route::patch("/dashboard/team/{id}", "AdminController@edit_member_info")->name("edit_team");
    Route::delete("/dashboard/team/{id}", "AdminController@delete_teams")->name("delete_team");

    Route::patch("/dashboard/payment", "AdminController@verify_team")->name("verify");
});
