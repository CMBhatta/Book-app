<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function show_customer($id){
        $customer = Mobile::find($id)->customer;
        return $customer;

    }
}
