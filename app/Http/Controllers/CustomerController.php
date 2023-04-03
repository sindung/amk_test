<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $customer = Customer::where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('address', 'LIKE', '%' . $keyword . '%')
            ->orWhere('phone', 'LIKE', '%' . $keyword . '%')
            ->orderBy('id', 'desc')
            ->paginate(3);
        return view('customer', ['customerList' => $customer]);
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer-detail', ['customer' => $customer]);
    }

    public function create()
    {
        return view('customer-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:50|required',
            'phone' => 'max:50|required',
            'address' => 'max:250|required',
        ]);

        // mass store
        $customer = Customer::create($request->all());

        if ($customer) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data added succesfully.');
        }

        return redirect('/customers');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer-edit', ['customer' => $customer]);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        // mass update
        $update = $customer->update($request->all());

        if ($update) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data updated succesfully.');
        }

        return redirect('/customers');
    }

    public function delete($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer-delete', ['customer' => $customer]);
    }

    public function destroy($id)
    {
        $delete = Customer::findOrFail($id)->delete();

        if ($delete) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data deleted succesfully.');
        }

        return redirect('/customers');
    }

    public function deleted(Request $request)
    {
        $keyword = $request->keyword;
        $deletedList = Customer::onlyTrashed()->get();
        return view('customer-deleted', ['deletedList' => $deletedList]);
    }

    public function restore($id)
    {
        $restore = Customer::withTrashed()
            ->where('id', $id)
            ->restore();

        if ($restore) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data restored succesfully.');
        }

        return redirect('/customers');
    }
}
