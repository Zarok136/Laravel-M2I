<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

//GET
Route::get('/', [StudentsController::class, 'index'])->name('index');
Route::get('/listOfStudents', [StudentsController::class, 'create'])->name('list');

//POST
Route::post('/', [StudentsController::class, 'store'])->name('store');
