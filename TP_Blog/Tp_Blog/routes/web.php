<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


//DEFINITION DES ROUTES
Route::view('/','home',['navbar'=>['/'=>'Acceuil','/contact'=>'Contact','/tpe'=>'Tableau Periodique Des Elements']]);
Route::view('/contact', 'contact',['navbar'=>['/'=>'Acceuil','/contact'=>'Contact','/tpe'=>'Tableau Periodique Des Elements']]);
Route::view('/tpe', 'tpe',['navbar'=>['/'=>'Acceuil','/contact'=>'Contact','/tpe'=>'TableauPeriodiqueDesElements']]);
Route::view('/creationarticle','creationarticle',['navbar'=>['/'=>'Acceuil','/contact'=>'Contact','/tpe'=>'TableauPeriodiqueDesElements']]);

//POST MESSAGE VIA CONTACT
Route::post('/contact',[ContactController::class,'store']);
