@extends('layouts/mainLayout')

@section('title', 'Deleted Order Item')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Deleted Order Item</li>
@endsection

@section('header', 'Deleted Customer List')
@section('content')
    <div class="mb-4">
        <a href="/order-item" class="btn btn-primary">Back</a>
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
                    <th>Order Code</th>
                    <th>Item Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Total</th>
                    <th>Note</th>
                    @if (Auth::user()->role_id == 1)
                        <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedList as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->orders->code }}</td>
                        <td>{{ $item->items->name }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->discount }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->note }}</td>
                        @if (Auth::user()->role_id == 1)
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Action href">
                                    <a href="/order-item-restore/{{ $item->id }}"
                                        class="btn btn-outline-info">Restore</a>
                                </div>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="my-3">
            {{-- {{ $deletedList->withQueryString()->links() }} --}}
        </div>
    </div>
@endsection
