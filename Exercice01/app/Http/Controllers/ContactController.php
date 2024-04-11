<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
public function create():object{
    return view('contact/create');
}

public function store(Request $request):object{

    return redirect('/contact/thanks',301);
}


public function thanks():object{
    return view('contact/thanks');
}
}
