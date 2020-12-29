<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\TeamController;
use App\Http\Controllers\AdminController;

use App\Team;

class AuthController extends Controller
{
    public function view_dashboard(Request $req){
        if($team = $req->user()){
            if(preg_match("/^(binusian|non\-binusian)$/i", $team->type)){
                // return redirect()->action("TeamController@view_dashboard");
                // return (new TeamController())->view_dashboard($req);
            }else if(preg_match("/^admin$/i", $team->type)){
                // return redirect()->action("AdminController@dashboard");
                // return (new AdminController())->view_dashboard($req);
            }
            return redirect()->route("index");
        }
        return redirect()->route("login");
    }

    public function view_login(){
        return view("login");
    }
    public function view_register(){
        return view("register");
    }

    public function login(Request $req){
        $val = $req->validate([
            "name" => ["required", "string"],
            "password" => ["required", "string"],
            "remember" => ["nullable", "boolean"]
        ]);
        // print_r($val);
        // die();
        $auth = Auth::guard("team")->attempt([
            "name" => $val["name"],
            "password" => $val["password"]],
            isset($val["remember"]) && $val["remember"]);
        if($auth){
            return redirect()->route("view_dashboard");
        }
        return view("login")->withErrors([__("auth.failed")]);
    }

    public function logout(Request $req){
        Auth::guard('team')->logout();

        return route("home");
    }

    public function register(Request $req){
        $req->validate([
            // ### TEAM #########
            "name" => ["required", "string", "min:3", "unique:App\Team,name"],
            "type" => ["required", "string", "regex:/^(binusian|non\-binusian)$/i"],
            "password" => ["required", "string", "min:8", "regex:/[A-Z]/",
                            "regex:/[a-z]/", "regex:/\d/", "regex:/[^\w\d]/"],

            // ### MEMBER #######
            "fullname" => ["required", "string"],
            // "type" => ["required", "string", "regex:/^(leader|member)$/i"],
            "email" => ["required", "string", "unique:App\Member,email",
                        "regex:/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/"],
            "place_of_birth" => ["required", "string"],
            "date_of_birth" => ["required", "date"],
            "lineid" => ["required", "string", "unique:App\Member,lineid"],
            "whatsapp" => ["required", "string", "min:9", "regex:/^\+?\d+$/",
                            "unique:App\Member,whatsapp"],
            "git_account" => ["required", "string"],
            "identity" => ["required", "file", "mimes:pdf,jpg,jpeg,png"],
            "cv" => ["required", "file", "mimes:pdf,jpg,jpeg,png"],
        ]);

        $team = Team::create([
            "name" => $req->name,
            "type" => strtolower($req->type),
            "password" => Hash::make($req->password)
        ]);

        $fn_identity = $req->file("identity")->store("id");
        $fn_cv = $req->file("cv")->store("cv");

        $team->members()->create([
            "fullname" => $req->fullname,
            // "type" => $req->type,
            "type" => "leader",
            "email" => $req->email,
            "place_of_birth" => $req->place_of_birth,
            "date_of_birth" => $req->date_of_birth,
            "lineid" => $req->lineid,
            "whatsapp" => $req->whatsapp,
            "git_account" => $req->git_account,
            "identity" => $fn_identity,
            "cv" => $fn_cv
        ]);

        $this->login($req);
    }
}
