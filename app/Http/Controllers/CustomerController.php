<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function creat(){
        $url = url('/customer');
        $customers = [];
        $title = "Customers Regitration";
        $data = compact('url','title','customers');
        return view('customer')->with($data);
    }
    public function store(Request $request){
        
        /////Insert Query
        $customers = new customers;
        $customers->name = $request['name'];
        $customers->email = $request['email'];
        $customers->gender = $request['gender'];
        $customers->address = $request['address'];
        $customers->dob = $request['dob'];
        $customers->password = md5($request['name']);
        $customers->status = $request['status'];
        $customers->save();
        ///--------
        return redirect('/customer');
    }
    public function view(Request $request){

        $search = $request['search'] ?? "";
        if($search != ""){
            ///where 
            $customers = Customers::where('name', 'LIKE', "$search%")->orWhere('email', 'LIKE', "%$search%")->get();
        }else{
            
            $customers = Customers::paginate(5);
        }
        $data = compact('customers','search');
        return view('customer-view')->with($data);

    }

    public function tras(){

        $customers = Customers::onlyTrashed()->get();
        $data = compact('customers');
        return view('customer-tras')->with($data);
    }
    ////////delete
    public function delete($id){

        $customers = customers::find($id);
        if(!is_null($customers)){
            $customers->delete();
        }
        return redirect('customer');
    }

    public function restore($id){
        $customers = customers::withTrashed()->find($id);
        if(!is_null($customers)){
            $customers->restore();
        }
        return redirect('customer');
    }

    public function ForceDelete($id){
        $customers = customers::withTrashed()->find($id);
        if(!is_null($customers)){
            $customers->ForceDelete();
        }
        return redirect()->back();
    }
    
    /////update
    public function edit($id){
        $customers = customers::find($id);
        if(is_null($customers)){
            ///not found
            return redirect('customer');
        }else{
            /////found
            $url = url('customer/update') . "/" . $id;
            $title = "Update Customer";
            $data = compact('customers','url','title');
            return view('customer')->with($data);
        }
    }
    public function update($id,request $request){
        $customers = customers::find($id);
        $customers->name = $request['name'];
        $customers->email = $request['email'];
        $customers->gender = $request['gender'];
        $customers->address = $request['address'];
        $customers->dob = $request['dob'];
        $customers->save();
        return redirect('customer');
    }
}
