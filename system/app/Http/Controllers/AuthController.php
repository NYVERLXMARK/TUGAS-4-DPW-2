<?php

namespace App\Http\Controllers;

class AuthController extends Controller{

    function showLogin(){
        return view('masuk');
    }

    function processLogin(){

    }

    function logout(){

    }

    function registration(){
        return view('daftar');
    }

    function forgotpassword(){

    }
}