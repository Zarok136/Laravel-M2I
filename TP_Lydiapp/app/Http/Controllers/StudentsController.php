<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        $students = Students::all();
        return view('listOfStudents', compact('students'));
    }

    public function create(){
        return view('addStudent');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'firstname'=>'required|string',
            'lastname'=>'required|string',
            'course'=>'required|string',
            'start'=>'required|date',
            'end'=>'required|date',
        ]);

        Students::create($validated);
    }

}
