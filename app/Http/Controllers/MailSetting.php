<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\MailClass;

class MailSetting extends Controller
{
    public function send_form(Request $request)
    {
    	$name = $request->name;
    	$email = $request->email;
    	$msg = $request->msg;

    	Mail::to('marita16121998@gmail.com')->send(new MailClass($name, $email, $msg));
    }
}
