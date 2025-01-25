<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contatti(){

         return view("contatti");
     }

     public function send(Request $request)
     {
        $mail = new \App\Mail\ProvaMail($request->name, $request->email, $request->message);
        
        \Illuminate\Support\Facades\Mail::to('admin@example.com')->send($mail);


        //Redirect alla pagina Contatti + Messaggio di invio Corretto
        return redirect()->back()->with(["success" => "Richiesta Inviata"]);
     }
}
