<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;

class SendEmailController extends Controller
{
    public function index() {
        return view('send');
    }

    public function send(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'text'=>'required'
        ]);

        $data = array(
            'name'=>$request->name,
            'subject'=>$request->subject,
            'email'=>$request->email,
            'text'=>$request->text
        );
        //Fill in email destination
        Mail::to('//')->send(new Email($data));
        return back()->with('success', 'Thank you for contacting us!');
    }
}
