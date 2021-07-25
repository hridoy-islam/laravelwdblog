<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function registerview(){

        return view('admin.register');

    }

    public function forgotview(){
        return view('admin.forgot');
    }
}
