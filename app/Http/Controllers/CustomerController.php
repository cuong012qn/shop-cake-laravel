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

    public function addCustomer(){
        return view('admin.customer.add');
    }

    public function postAddCustomer(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone_number;
        $customer->note = $request->note;

        $customer->save();

        return redirect('/admin/customer');
    }
}
