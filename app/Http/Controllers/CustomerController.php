<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $customers =  Customer::all();
      return view('customers.allCustomers',compact('customers'));
    //   return $customers;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.addCustomer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //method 1

        // $customer = new Customer;
        // $customer->name = $request->cname;
        // $customer->email = $request->cemail;
        // $customer->phone = $request->cphone;
        // $customer->address = $request->caddress;
        // $customer->city = $request->ccity;

        // $customer->save();

        //method 2

        Customer::create([
        'name' => $request->cname,
      'email' => $request->cemail,
        'phone' => $request->cphone,
        'address' => $request->caddress,
        'city' => $request->ccity

        ]);


        return redirect()->route('customers.index')->with('status','New Customer Added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $customerId)
    {
        $cus = Customer::find($customerId);
        return view('customers.viewCustomer',compact('cus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customers.editCustomer');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
