<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function view_dashboard(Request $req){
        // $team = Team::findOrFail($req->user()->id);
        $team = $req->user();
        return view("dashboard", compact('team'));
    }

    public function payment($id){
        $team = Team::findOrFail($id);
        return view("payment", compact('team'));
    }

    public function add(Request $req, $id){
        $req->validate([
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

        $fn_identity = $req->file("identity")->store("id");
        $fn_cv = $req->file("cv")->store("cv");

        Team::findOrFail($id)->members()->create([
            "fullname" => $req->fullname,
            // "type" => $req->type,
            "type" => "member",
            "email" => $req->email,
            "place_of_birth" => $req->place_of_birth,
            "date_of_birth" => $req->date_of_birth,
            "lineid" => $req->lineid,
            "whatsapp" => $req->whatsapp,
            "git_account" => $req->git_account,
            "identity" => $fn_identity,
            "cv" => $fn_cv
        ]);

        return back();
    }

    public function pay(Request $req, $id) {
        $req->validate([
            'payment' => ["required", "file", "mimes:pdf,jpg,jpeg,png"]
        ]);
        $fn_payment = $req->file('payment')->store("pay");
        Team::findorFail($id)->update([
            'payment' => $fn_payment
        ]);
        return back();
    }
}
