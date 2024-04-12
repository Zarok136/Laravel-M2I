<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        ContactMessage::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'mail'=> $request->mail,
            'message'=> $request->message,
        ]);
    }
}
