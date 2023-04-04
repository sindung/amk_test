<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $items = Item::where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('price', 'LIKE', '%' . $keyword . '%')
            ->orWhere('description', 'LIKE', '%' . $keyword . '%')
            ->latest()
            ->paginate(3);
        return view('item', ['itemList' => $items]);
    }

    public function show($id)
    {
        $items = Item::findOrFail($id);
        return view('item-detail', ['items' => $items]);
    }

    public function create()
    {
        $class = ClassRoom::select('id', 'name')->get();
        return view('item-add', ['classList' => $class]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:50|required',
            'price' => 'required',
            'description' => 'max:250|required',
        ]);

        // mass store
        $request->merge([
            'id' => Str::uuid()->toString(),
        ]);
        $items = Item::create($request->all());

        if ($items) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data added succesfully.');
        }

        return redirect('/item');
    }

    public function edit($id)
    {
        $items = Item::findOrFail($id);
        return view('item-edit', ['items' => $items]);
    }

    public function update(Request $request, $id)
    {
        $items = Item::findOrFail($id);
        // mass update
        $update = $items->update($request->all());
        if ($update) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data updated succesfully.');
        }

        return redirect('/item');
    }

    public function delete($id)
    {
        $items = Item::findOrFail($id);
        return view('item-delete', ['items' => $items]);
    }

    public function destroy($id)
    {
        $delete = Item::findOrFail($id)->delete();

        if ($delete) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data deleted succesfully.');
        }

        return redirect('/item');
    }

    public function deleted(Request $request)
    {
        $keyword = $request->keyword;
        $deletedList = Item::onlyTrashed()->get();
        return view('item-deleted', ['deletedList' => $deletedList]);
    }

    public function restore($id)
    {
        $restore = Item::withTrashed()
            ->where('id', $id)
            ->restore();

        if ($restore) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data restored succesfully.');
        }

        return redirect('/item');
    }
}
