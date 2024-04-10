<?php
use http\Client\Request;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome',['navbar'=>['/'=>'Acceuil','/apropos'=>'A propos','/contact'=>'Contact']]);
Route::view('/apropos','apropos',['navbar'=>['/'=>'Acceuil','/apropos'=>'A propos','/contact'=>'Contact']]);
Route::view('/contact','contact',['navbar'=>['/'=>'Acceuil','/apropos'=>'A propos','/contact'=>'Contact']]);
