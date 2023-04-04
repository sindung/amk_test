<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class OrderItemController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $orderItem = OrderItem::with(['orders', 'items'])
            ->whereHas('orders', function ($query) use ($keyword) {
                $query->where('code', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('items', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhere('qty', 'LIKE', '%' . $keyword . '%')
            ->orWhere('price', 'LIKE', '%' . $keyword . '%')
            ->latest()
            ->paginate(3);
        return view('order-item', ['orderItemList' => $orderItem]);
    }

    public function show($id)
    {
        $orderItem = OrderItem::findOrFail($id);
        return view('order-item-detail', ['orderItem' => $orderItem]);
    }

    public function create()
    {
        $order = Order::select('id', 'code')->get();
        $item = Item::select('id', 'name')->get();
        return view('order-item-add', ['orderList' => $order, 'itemList' => $item]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'item_id' => 'required',
            'qty' => 'max:11|required',
            'price' => 'max:8|required',
            'discount' => 'max:8|required',
            'total' => 'max:8|required',
            'note' => 'max:250|required',
        ]);

        // mass store
        $request->merge([
            'id' => Str::uuid()->toString(),
        ]);
        $orderItem = OrderItem::create($request->all());

        if ($orderItem) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data added succesfully.');
        }

        return redirect('/order-item');
    }

    public function edit($id)
    {
        $orderItem = OrderItem::findOrFail($id);
        $order = Order::select('id', 'code')->get();
        $item = Item::select('id', 'name')->get();
        return view('order-item-edit', ['orderItem' => $orderItem, 'orderList' => $order, 'itemList' => $item]);
    }

    public function update(Request $request, $id)
    {
        $orderItem = OrderItem::findOrFail($id);

        // mass update
        $update = $orderItem->update($request->all());
        if ($update) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data updated succesfully.');
        }

        return redirect('/order-item');
    }

    public function delete($id)
    {
        $orderItem = OrderItem::findOrFail($id);
        return view('order-item-delete', ['orderItem' => $orderItem]);
    }

    public function destroy($id)
    {
        $delete = OrderItem::findOrFail($id)->delete();

        if ($delete) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data deleted succesfully.');
        }

        return redirect('/order-item');
    }

    public function deleted(Request $request)
    {
        $keyword = $request->keyword;
        $deletedList = OrderItem::onlyTrashed()->get();
        return view('order-item-deleted', ['deletedList' => $deletedList]);
    }

    public function restore($id)
    {
        $restore = OrderItem::withTrashed()
            ->where('id', $id)
            ->restore();

        if ($restore) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data restored succesfully.');
        }

        return redirect('/order-item');
    }
}
