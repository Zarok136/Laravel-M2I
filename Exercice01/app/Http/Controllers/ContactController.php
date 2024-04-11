<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
public function create():object{
    return view('contact/create');
}

public function store(Request $request):object{
    $validatedData= $request->validate([
        'name' => 'required|string|max:20',
        'lastname' => 'required|string|max:20'
    ]);
    return redirect('/contact/thanks');
}


public function thanks():object{
    return view('contact/thanks');
}
}
