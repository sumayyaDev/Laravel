<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Company;
use Illuminate\Http\Request;
use Resources\Views\Internals\customers;
use Resources\Views\contact;

class CustomersController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('auth')->except(['index']);
    }
    
    public function index()
    {
        $customers = Customer::all();

        return view('customers.index', compact('customers'));

        /*$activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();*/

        //return view('customers.index', compact('activeCustomers', 'inactiveCustomers'));
        /*return view('internals.customers', [  
            'activeCustomers' => $activeCustomers,
            'inactiveCustomers' => $inactiveCustomers,
        ]);*/
    }
    
    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();
        return view('customers.create', compact('companies', 'customer'));
    }


    public function store()
    {
       /* $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);

        Customer::create($data);*/

        Customer::create($this->validateRequest());

        /*$customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->active = request('active');
        $customer->save();*/

        return redirect('customers');
        
    }

    public function show(Customer $customer)
    {
        //$customer = Customer::where('id', $customer)->firstOrFail();
       
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer)
    {
        /*$data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);

        $customer->update($data);*/
        $customer->update($this->validateRequest());

        return redirect('customers/' . $customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('customers');
    }

    public function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);
    }

}
 