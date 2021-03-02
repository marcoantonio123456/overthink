<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailer;
;
class mailcontroller extends Controller

{
    public function store(Request $request)
    {
        $clientEmail = $request->all();
        $clientEmail = $clientEmail['email-2'];

        $details = ['email' => $clientEmail,
        'subject' => 'New submission!',
        'type' => 'admin'];

        //Goes to admin
        Mail::to('marco@overthink.studio')->send(new mailer($details));

        //Goes to user
        $details = ['email' => $clientEmail,
        'subject' => 'New submission for to user',
        'type' => 'user']; 
        Mail::to($clientEmail)->send(new mailer($details));

        return redirect()->to('/')
            ->with('message', "Thanks, we'll stay in touch");
    }

    public function extraStore(Request $request)
    {
        $all = $request->all();
        $fname = $all['field-3'];
        // $lname = $all[''] pass rest of variables
    }
}