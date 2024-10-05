<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $filename = time()."img.".$request->file('file')->getClientOriginalExtension();
        
       echo $request->file('file')->storeAs('uploads',$filename);
    }
}
