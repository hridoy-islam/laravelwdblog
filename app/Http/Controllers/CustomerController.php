<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function profile($id){
        $data = Customer::find($id);
        //dd($data);
        return view('frontend.customer.profile', compact('data'));

    }
    public function orders($id){
        return view('frontend.customer.orders');
    }
}
