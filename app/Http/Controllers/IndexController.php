<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

// use Illuminate\Support\Facades\View;
// use Illuminate\Http\Response;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function css_championPrizes(){
        return response(view('css.championPrizes'))->header('Content-Type', 'text/css');
        // return view("css.championPrizes");
    }

    public function send(Request $request) {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'subject'=>'required',
            'text'=>'required|min:15'
        ]);

        $data = array(
            'name'=>$request->name,
            'subject'=>$request->subject,
            'email'=>$request->email,
            'text'=>$request->text
        );
        //Fill in email destination
        Mail::to('technoscape@bncc.net')->send(new Email($data));
        return back()->with('success', 'Thank you for contacting us!');
    }
}
