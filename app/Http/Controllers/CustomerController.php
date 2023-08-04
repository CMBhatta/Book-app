<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add_customer(){
        $mobile = new Mobile();
        $mobile->model = 'LG2';

        $customer = new Customer();
        $customer->name = 'rahul';
        $customer->email = 'laravel@gmail.com';

        $customer->save();
        $customer->mobile()->save($mobile);
    }
    // retrive the data from database
    public function show_mobile($id){
        $mobile = Customer::find($id)->mobile;
        return $mobile;
    }
}
