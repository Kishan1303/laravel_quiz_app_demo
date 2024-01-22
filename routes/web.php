<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 

Route::get('/', function () {
    return view('/loginUser');
});

// Route::get('/hello',[UserController::class,"showData"]);

Route::get('/login',[UserController::class,"showData"]);

Route::get('/registration',function(){
    return view('userRegistration');    
});

Route::get('/forgetpassword',function(){
    return view('forgotPassword');    
});