<?php

use App\Http\Controllers\ContactController;
use http\Client\Request;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome',['navbar'=>['/'=>'Acceuil','/apropos'=>'A propos','/contact'=>'Contact']]);
Route::view('/apropos','apropos',['navbar'=>['/'=>'Acceuil','/apropos'=>'A propos','/contact'=>'Contact']]);
Route::view('/contact','contact/create',['navbar'=>['/'=>'Acceuil','/apropos'=>'A propos','/contact'=>'Contact']]);


Route::get('/contact',[ContactController::class, 'create']);
Route::post('/contact',[ContactController::class, 'store']);
Route::get('/contact/thanks',[ContactController::class, 'thanks']);

