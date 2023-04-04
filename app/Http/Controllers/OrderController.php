<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $order = Order::with('customer')
            ->where('code', 'LIKE', '%' . $keyword . '%')
            ->orWhere('address', 'LIKE', '%' . $keyword . '%')
            ->orWhere('subtotal', 'LIKE', '%' . $keyword . '%')
            ->orWhere('discount', 'LIKE', '%' . $keyword . '%')
            ->orWhere('total', 'LIKE', '%' . $keyword . '%')
            ->latest()
            ->paginate(3);
        return view('order', ['orderList' => $order]);
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('order-detail', ['order' => $order]);
    }

    public function create()
    {
        $customer = Customer::get(['id', 'name']);
        return view('order-add', ['customerList' => $customer]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'max:50|required',
            'date' => 'required',
            'customer_id' => 'required',
            'subtotal' => 'required',
            'discount' => 'required',
            'total' => 'required',
            'address' => 'max:250|required',
        ]);

        // mass store
        $request->merge([
            'id' => Str::uuid()->toString(),
        ]);
        $order = Order::create($request->all());

        if ($order) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data added succesfully.');
        }

        return redirect('/orders');
    }

    public function edit($id)
    {
        $order = Order::with('customer')->findOrFail($id);
        $customer = Customer::get(['id', 'name']);
        return view('order-edit', ['order' => $order, 'customerList' => $customer]);
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        // mass update
        $update = $order->update($request->all());
        if ($update) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data updated succesfully.');
        }

        return redirect('/orders');
    }

    public function delete($id)
    {
        $order = Order::findOrFail($id);
        return view('order-delete', ['order' => $order]);
    }

    public function destroy($id)
    {
        $delete = Order::findOrFail($id)->delete();

        if ($delete) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data deleted succesfully.');
        }

        return redirect('/orders');
    }

    public function deleted(Request $request)
    {
        $keyword = $request->keyword;
        $deletedList = Order::onlyTrashed()->get();
        return view('order-deleted', ['deletedList' => $deletedList]);
    }

    public function restore($id)
    {
        $restore = Order::withTrashed()
            ->where('id', $id)
            ->restore();

        if ($restore) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data restored succesfully.');
        }

        return redirect('/orders');
    }
}
