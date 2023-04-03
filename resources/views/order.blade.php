@extends('layouts/mainLayout')

@section('title', 'Order')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Order</li>
@endsection

@section('header', 'Order List')
@section('content')
    <div class="mb-4">
        <a href="/orders-add" class="btn btn-primary">Add data</a>
        @if (Auth::user()->role_id == 1)
            <a href="/orders-deleted" class="btn btn-outline-secondary">Show deleted data</a>
        @endif
    </div>

    @if (Session::has('status'))
        <div class="alert alert-{{ Session::get('alert') }}" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="table-responsive">
        <div class="my-2">
            <form action="" method="GET">
                <div class="row">
                    <div class="col-8 col-md-4">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="keyword"
                                aria-label="Search" aria-describedby="search">
                            <button class="btn btn-outline-primary" type="submit" id="search">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Code</th>
                    <th>Date</th>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Subtotal</th>
                    <th>Discount</th>
                    <th>Total</th>
                    @if (Auth::user()->role_id == 1)
                        <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($orderList as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->customer->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->subtotal }}</td>
                        <td>{{ $item->discount }}</td>
                        <td>{{ $item->total }}</td>
                        @if (Auth::user()->role_id == 1)
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Action href">
                                    <a href="orders-edit/{{ $item->id }}" class="btn btn-outline-info">Edit</a>
                                    <a href="orders-delete/{{ $item->id }}" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="my-3">
            {{ $orderList->withQueryString()->links() }}
        </div>
    </div>
@endsection
