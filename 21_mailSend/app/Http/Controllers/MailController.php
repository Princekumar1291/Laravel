<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
class MailController extends Controller
{
    //
    function sendEmail(){
        $to="princekumar7320918928@gmail.com";
        $msg="hello this is a test mail";
        $sub="test mail";
        Mail::to($to)->send(new WelcomeEmail($msg,$sub));
        return "email has been sent";
    }
}
