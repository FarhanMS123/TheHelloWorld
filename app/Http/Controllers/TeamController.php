<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Carbon;
use App\Team;

class TeamController extends Controller
{

    public function view_dashboard(Request $req){
        $team = $req->user();
        return view("dashboard", compact('team'));
    }

    public function timeline(Request $req){
        $team = $req->user();
        return view("timeline", compact('team'));
    }

    public function payment(Request $req){
        // date_default_timezone_set("UTC");
        // echo "<pre>";
        // var_dump(date("Y-m-d H:i:s", time()));
        // die("</pre>");
        $team = $req->user();
        if(is_null($team->status))
            $stats = "Not Verified";
        elseif($team->status==1)
            $stats = "Verified";
        elseif($team->status==0)
            $stats = "Rejected";

        $tipe = null;
        $price = null;
        $date_str = date("d F Y H.i.s", config("hackathon.end_time_early_bid"));
        // echo "<pre>";
        // var_dump([time(), config("hackathon.price_binusian"), config("hackathon.end_time_early_bid")]);
        // die("</pre>");
        if(time() < config("hackathon.end_time_early_bid")){
            $tipe = $team->type;
            $price = "Rp. " . config("hackathon.price_early_bid");
        }else if(preg_match("/^non-binusian$/i", $team->type)){
            $tipe = "Non-binusian";
            $price = "Rp. " . config("hackathon.price_non_binusian");
        }else if(preg_match("/^binusian$/i", $team->type)){
            $tipe = "Binusian";
            $price = "Rp. " . config("hackathon.price_binusian");
        }
        return view("payment", compact('team','stats','tipe','price', 'date_str'));
    }

    public function add(Request $req){
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

        $req->user()->members()->create([
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

    public function pay(Request $req) {
        // date_default_timezone_set('UTC');
        $req->validate([
            'payment' => ["required", "file", "mimes:pdf,jpg,jpeg,png"]
        ]);

        $fn_payment = $req->file('payment')->store("pay");
        $req->user()->update([
            'payment' => $fn_payment,
            'paid_at' => Carbon::now() // date("Y-m-d H:i:s", time())
        ]);
        // die();
        return back();
    }
}
