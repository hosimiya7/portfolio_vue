<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSendController extends Controller
{

    public function send(Request $request){

        $contact = $request;

         Mail::to("hosiokuriweb@gmail.com")->send(new \App\Mail\ContactMail($contact));

        return $contact;


    }


}
