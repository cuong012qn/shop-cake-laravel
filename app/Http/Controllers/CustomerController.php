<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getCustomers()
    {
        $customer = Customer::all();

        return view('admin.customer', array('customers' => $customer));
    }
}
