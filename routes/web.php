<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registercontroller;
use App\Models\Customers;
use App\Controllers\testcontroller;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\App;


 
///////////basic controller

// Route::get('/',[Democontroller::class,'index']);
// Route::get('about',[Democontroller::class,'about']);
// Route::get('about','App\http\controllers\Democontroller@about');



///////Single Action controller

// Route::get('courses',SingleActioncontroller::class);


//////video 7 submit form
// Route::get('/',function(){
//     return view('form');
// });


///////12video


// Route::get('/customers',function(){
//     $customers = Customers::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });
Route::get('/',function(){
    return view('index');
});
 
////13video

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);

///////customer page

Route::group(['prefix' => '/customer'],function(){
    Route::get('/creat',[CustomerController::class,'creat'])->name('customer.creat');
    Route::get('/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
    Route::get('/restore/{id}',[CustomerController::class,'restore'])->name('customer.restore');
    Route::get('/ForceDelete/{id}',[CustomerController::class,'ForceDelete'])->name('customer.ForceDelete');
    Route::get('/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('/update/{id}',[CustomerController::class,'update'])->name('customer.update');
    Route::get('/',[CustomerController::class,'view']);
    Route::get('/tras',[CustomerController::class,'tras']);
    Route::post('/',[CustomerController::class,'store']);
});

Route::get('get_all_session',function(){
    $session = session()->all();
    p($session);
});
Route::get('set_all_session',function(Request $request){
    $request->session()->put('user_name',"Webdigitals");
    $request->session()->put('User_id',"dev22");
    $request->session()->flash('status','Success');
    return redirect('get_all_session');
});
Route::get('destroy',function(){
    session()->forget(['user_name','User_id']);
    // session()->forget('User_id');
    return redirect('get_all_session'); 
});


////24video                             
Route::get('/upload',function(){
    return view('upload');
});
Route::post('/upload',[UploadController::class,'upload']);

//////////-------30 video

Route::get('/{lang?}',function($lang = null){
    App::setlocale($lang);
    return view('index');
});






