<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showData(){
        echo "Hello";
    }

    public function helloUser($email , $password){

        echo "your email is $email and password is $password";

    }
}
