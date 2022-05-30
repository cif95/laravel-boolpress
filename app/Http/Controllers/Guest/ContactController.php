<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendNewMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('guest.contact');
    }

    public function contactSend(Request $request){

        Mail::to("boolpressAdmin@gmail.com")
        ->send(new SendNewMail(
            $request->guest_name,
            $request->guest_email,
            $request->guest_emailTitle,
            $request->guest_message
        ));

        return redirect()
        ->route('home')
        ->with('message', "Thank you $request->guest_name, your message has been sent successfully");
    }
}
