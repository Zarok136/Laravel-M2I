<?php

namespace App\Http\Controllers;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
public function create():object{
    return view('contact.create', ['style'=>'base.css','navbar'=>['/'=>'Acceuil','/apropos'=>'A propos','contact.create'=>'Contact']]);
}

public function store(Request $request):object{
    ContactMessage::create([
        'name' => $request->name,
        'lastname' => $request->lastname
    ]);

    return redirect('contact.thanks');
}


public function thanks():object{
    return view('contact.thanks',['style'=>'base.css','navbar'=>['/'=>'Acceuil','/apropos'=>'A propos','contact.create'=>'Contact']]);
}
}
