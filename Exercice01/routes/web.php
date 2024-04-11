<?php

use App\Http\Controllers\ContactController;
use http\Client\Request;
use Illuminate\Support\Facades\Route;



Route::view('/','welcome',['style'=>'base.css','navbar'=>['/'=>'Acceuil','/apropos'=>'A propos','contact.create'=>'Contact']]);
Route::view('/apropos','apropos',['style'=>'base.css','navbar'=>['/'=>'Acceuil','/apropos'=>'A propos','contact.create'=>'Contact']]);



Route::get('contact.create',[ContactController::class, 'create']);
Route::post('contact.create',[ContactController::class, 'store']);
Route::get('contact.thanks',[ContactController::class, 'thanks']);
