<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    public function send()
    {   
        $body = "This is a test email sent from Laravel.";
        Mail::raw($body, function ($message) {
            $message->to('nwdankit701@gmail.com')
                    ->subject('Test Email');
        });

        return "Email Sent";
    }
}
