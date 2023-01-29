<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {   
        $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'objet' => 'required',
            'message' => 'required'
        ]);
        
        $data = [
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'objet' => $request->objet,
            'message' => $request->message
        ];

        Mail::to("walidfajri35@gmail.com")->send(new ContactMail($data));

        return redirect("/");
    }
}