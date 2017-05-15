<?php

namespace App\Http\Controllers;
use App\Mail\OrderShipped;
use Mail;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function sendMail(){
        $content = [
            'title'=> 'Itsolutionstuff.com mail',
            'body'=> 'The body of your message.',
            'button' => 'Click Here'
        ];

        $receiverAddress = 'your email';

        Mail::to($receiverAddress)->send(new OrderShipped($content));

        dd('mail send successfully');
    }
}
