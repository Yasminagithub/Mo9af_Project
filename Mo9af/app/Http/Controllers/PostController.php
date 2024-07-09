<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'message' => 'required'
        ]);
        if ($this->isOnline()) {
           $mail_data = [
               'recipient' => 'mo9efapp@gmail.com',
               'fromEmail' => $request->email,
               'fromName' => $request->name,
               'subject' => $request->objet,
               'body' => $request->message
           ];
           Mail::send('email-template',$mail_data,function($message) use ($mail_data){
               $message->to($mail_data['recipient'])
                   ->from($mail_data['fromEmail'])
                   ->subject($mail_data['subject']);

           });
           return redirect()->back()->with('succes','Email sent!');
        }else{
                return redirect()->back()->withInput()->with('error','check your conexion');
            }

    }

    public function isOnline($site = "https://fast.com/fr/")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
}
