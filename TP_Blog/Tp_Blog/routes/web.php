<?php

use Illuminate\Support\Facades\Route;



Route::view('/','home',['navbar'=>['/'=>'Acceuil','/contact'=>'Contact','/tpe'=>'TableauPeriodiqueDesElements']]);
Route::view('/contact', 'contact',['navbar'=>['/'=>'Acceuil','/contact'=>'Contact','/tpe'=>'TableauPeriodiqueDesElements']]);
Route::view('/tpe', 'tpe',['navbar'=>['/'=>'Acceuil','/contact'=>'Contact','/tpe'=>'TableauPeriodiqueDesElements']]);

