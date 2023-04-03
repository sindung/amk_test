@extends('layouts/mainLayout')

@section('title', 'Edit Order')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Edit Order</li>
@endsection

@section('header', 'Edit Order')
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
        <form class="row g-3" method="POST" action="/orders/{{ $order->id }}">
            @method('PUT')
            @csrf
            <div class="col-md-6">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" name="code" maxlength="50"
                    value="{{ $order->code }}" autofocus required>
            </div>
            <div class="col-md-6">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" maxlength="50"
                    value="{{ $order->date }}" autofocus required>
            </div>
            <div class="col-6">
                <label for="customer_id" class="form-label">Customer</label>
                <select id="customer_id" name="customer_id" class="form-select" autofocus required>
                    <option selected>Choose...</option>
                    @foreach ($customerList as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $order->customer_id ? 'selected' : '' }}>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6">
                <label for="subtotal" class="form-label">Subtotal</label>
                <input type="number" class="form-control" id="subtotal" name="subtotal" maxlength="10"
                    value="{{ $order->subtotal }}" autofocus required>
            </div>
            <div class="col-6">
                <label for="discount" class="form-label">Discount</label>
                <input type="number" class="form-control" id="discount" name="discount" maxlength="10"
                    value="{{ $order->discount }}" autofocus required>
            </div>
            <div class="col-6">
                <label for="total" class="form-label">Total</label>
                <input type="number" class="form-control" id="total" name="total" maxlength="10"
                    value="{{ $order->total }}" autofocus required>
            </div>
            <div class="col-6">
                <label for="address" class="form-label">Address</label>
                {{-- <input type="text" class="form-control" id="address" name="address" maxlength="10" autofocus required> --}}
                <textarea class="form-control" name="address" id="address" cols="30" rows="5" maxlength="250">{{ $order->address }}</textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
