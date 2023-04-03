@extends('layouts/mainLayout')

@section('title', 'Edit Order Item')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Edit Order Item</li>
@endsection

@section('header', 'Edit Order Item')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger mb-3" role="alert">
            <ul class="m-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="">
        <form class="row g-3" method="POST" action="/order-item/{{ $orderItem->id }}">
            @method('PUT')
            @csrf
            <div class="col-6">
                <label for="order_id" class="form-label">Order Code</label>
                <select id="order_id" name="order_id" class="form-select" autofocus required>
                    <option selected>Choose...</option>
                    @foreach ($orderList as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $orderItem->order_id ? 'selected' : '' }}>
                            {{ $item->code }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <label for="item_id" class="form-label">Item Name</label>
                <select id="item_id" name="item_id" class="form-select" autofocus required>
                    <option selected>Choose...</option>
                    @foreach ($itemList as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $orderItem->item_id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="qty" class="form-label">Qty</label>
                <input type="number" class="form-control" id="qty" name="qty" maxlength="11"
                    value="{{ $orderItem->qty }}" autofocus required>
            </div>
            <div class="col-6">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" maxlength="8"
                    value="{{ $orderItem->price }}" autofocus required>
            </div>
            <div class="col-6">
                <label for="discount" class="form-label">Discount</label>
                <input type="number" class="form-control" id="discount" name="discount" maxlength="8"
                    value="{{ $orderItem->discount }}" autofocus required>
            </div>
            <div class="col-6">
                <label for="total" class="form-label">Total</label>
                <input type="number" class="form-control" id="total" name="total" maxlength="8"
                    value="{{ $orderItem->total }}" autofocus required>
            </div>
            <div class="col-6">
                <label for="note" class="form-label">Note</label>
                {{-- <input type="text" class="form-control" id="note" name="note" maxlength="8" autofocus required> --}}
                <textarea class="form-control" name="note" id="note" cols="30" rows="5">{{ $orderItem->note }}</textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
