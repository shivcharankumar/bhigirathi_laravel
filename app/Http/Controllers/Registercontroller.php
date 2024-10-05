<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registercontroller extends Controller
{
    public function index(){
        return view('form');
    }
    public function register(request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required'
            ]
        );
        echo "<pre>";
        print_r($request->all());
    }
}
