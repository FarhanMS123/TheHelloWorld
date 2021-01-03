<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Member;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Support\Carbon;

class AdminController extends Controller
{
    // ### PAYMENT #######
    public function getPriceConfig($team){
        if(time() < config("hackathon.end_time_early_bid")){
            return config("hackathon.price_early_bid");
        }else if(preg_match("/^non-binusian$/i", $team->type)){
            return config("hackathon.price_non_binusian");
        }else if(preg_match("/^binusian$/i", $team->type)){
            return config("hackathon.price_binusian");
        }
    }

    public function index_payment(){
        // $teams = Team::all();
        $teams = Team::whereNotNull("payment")->get();

        return view("admin.index-payment-admin", compact("teams"));
    }

    public function verify_team(Request $req){
        $req->validate([
            "id" => ["required", "numeric", "min:0"],
            "status" => ["required", "min:0", "max:1"]
        ]);

        $team = Team::findOrFail($req->id);
        $isValidating = $req->status;
        $team->update([
            "verified_at" => ($isValidating ? Carbon::now() : null),
            "status" => ($isValidating ? 1 : 0)
        ]);

        return back();
    }

    // ### PARTICIPANTS #######
    public function index_teams(){
        $teams = Team::all();

        return view("admin.participant-data-admin", compact("teams"));
    }

    public function view_team($id){
        $team = Team::findOrFail($id);
        $leader = Null;
        foreach($team->members as $member){
            if(preg_match("/^leader$/i", $member->type)){
                $leader = $member;
                break;
            }
        }

        return view("admin.view-data-admin", compact('team', 'leader'));
    }

    public function view_edit_team($id){
        $team = Team::findOrFail($id);
        $leader = Null;
        foreach($team->members as $member){
            if(preg_match("/^leader$/i", $member->type)){
                $leader = $member;
                break;
            }
        }

        return view("admin.edit-data-admin", compact('team', 'leader'));
    }

    public function edit_member_info(Request $req, $mid){
        $member = Member::findOrFail($mid);

        $validate = $req->validate([
            // ### MEMBER #######
            // "id" => ["required", "numeric"],
            "fullname" => ["required", "string"],
            // "type" => ["required", "string", "regex:/^(leader|member)$/i"],
            "email" => ["exclude_if:email,{$member->email}",
                        "string", "unique:App\Member,email", "email"],
            "place_of_birth" => ["required", "string"],
            "date_of_birth" => ["required", "date"],
            "lineid" => ["exclude_if:lineid,{$member->lineid}",
                         "string", "unique:App\Member,lineid"],
            "whatsapp" => ["exclude_if:whatsapp,{$member->whatsapp}", "required",
                           "string", "min:9", "regex:/^\+?\d+$/", "unique:App\Member,whatsapp"],
            "git_account" => ["required", "string"],
            "identity" => ["nullable", "file", "mimes:pdf,jpg,jpeg,png"],
            "cv" => ["nullable", "file", "mimes:pdf,jpg,jpeg,png"],
        ]);
        if($req->hasFile("identity") && $req->file("identity")->isValid()){
            $fn_identity = $req->file("identity")->store("id");
            Storage::delete($member["identity"]);
            $validate["identity"] = $fn_identity;
        }else{
            unset($validate["identity"]);
        }

        if($req->hasFile("cv") && $req->file("cv")->isValid()){
            $fn_cv = $req->file("cv")->store("cv");
            Storage::delete($member["cv"]);
            $validate["cv"] = $fn_cv;
        }else{
            unset($validate["cv"]);
        }

        $member->update($validate);

        return back();
    }

    public function delete_team(Request $req, $id){
        Team::findOrFail($id)->delete();

        return back();
    }
}
