<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function index(){
        return view('customer');
    }
    // public function store(Request $request){
    //     echo "<pre>";
    //     print_r($request->all());
    // }
}
