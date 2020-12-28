<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Member;

class AdminController extends Controller
{
    public function dashboard(){
        $teams = Team::all();

        // return view("admin_dashboard", compact("teams"));
    }

    public function verify_team(Request $req, $id){
        $team = Team::findOrFail($id);
        $team->update([
            "verified_at" => ($team["verified_at"] == null ? date('Y-m-d H:i:s') : null)
        ]);

        return back();
    }

    public function delete_team(Request $req, $id){
        Team::findOrFail($id)->delete();

        return back();
    }

    public function edit_member_info(Request $req, $mid){
        $validate = $req->validate([
            // ### MEMBER #######
            "fullname" => ["nullable", "string"],
            // "type" => ["required", "string", "regex:/^(leader|member)$/i"],
            "email" => ["extends_unless:email,unique:App\Member,email",
                        "string", "unique:App\Member,email", "email"],
            "place_of_birth" => ["required", "string"],
            "date_of_birth" => ["required", "date"],
            "lineid" => ["required", "string", "unique:App\Member,lineid"],
            "whatsapp" => ["required", "string", "min:9", "regex:/^\+?\d+$/",
                            "unique:App\Member,whatsapp"],
            "git_account" => ["required", "string"],
            "identity" => ["required", "file", "mimes:pdf,jpg,jpeg,png"],
            "cv" => ["required", "file", "mimes:pdf,jpg,jpeg,png"],
        ]);

        Member::findOrFail($mid)->update($validate);

        return back();
    }
}
