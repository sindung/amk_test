@extends('layouts/mainLayout')

@section('title', 'Add New Order Item')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Add Order Item</li>
@endsection

@section('header', 'Add New Order Item')
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
        <form class="row g-3" method="POST" action="order-item">
            @csrf
            <div class="col-6">
                <label for="order_id" class="form-label">Order Code</label>
                <select id="order_id" name="order_id" class="form-select" autofocus required>
                    <option selected>Choose...</option>
                    @foreach ($orderList as $item)
                        <option value="{{ $item->id }}">{{ $item->code }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <label for="item_id-0" class="form-label">Item Name</label>
                                    <select id="item_id-0" name="item_id[]" class="form-select" autofocus required>
                                        <option selected>Choose...</option>
                                        @foreach ($itemList as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <label for="qty-0" class="form-label">Qty</label>
                                    <input type="number" class="form-control" id="qty-0" name="qty[]" maxlength="11"
                                        autofocus required>
                                </td>
                                <td>
                                    <label for="price-0" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price-0" name="price[]" maxlength="8"
                                        autofocus required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="item_id-1" class="form-label">Item Name</label>
                                    <select id="item_id-1" name="item_id[]" class="form-select" autofocus required>
                                        <option selected>Choose...</option>
                                        @foreach ($itemList as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <label for="qty-1" class="form-label">Qty</label>
                                    <input type="number" class="form-control" id="qty-1" name="qty[]" maxlength="11"
                                        autofocus required>
                                </td>
                                <td>
                                    <label for="price-1" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price-1" name="price[]" maxlength="8"
                                        autofocus required>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    <button type="button" class="btn btn-primary" onclick="">Add Item</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>
                                    <label for="discount" class="form-label">Discount</label>
                                    <input type="number" class="form-control" id="discount" name="discount" maxlength="8"
                                        autofocus required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>
                                    <label for="total" class="form-label">Total</label>
                                    <input type="number" class="form-control" id="total" name="total" maxlength="8"
                                        autofocus required>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            {{-- <div class="col-6">
                <label for="item_id" class="form-label">Item Name</label>
                <select id="item_id" name="item_id" class="form-select" autofocus required>
                    <option selected>Choose...</option>
                    @foreach ($itemList as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="qty" class="form-label">Qty</label>
                <input type="number" class="form-control" id="qty" name="qty" maxlength="11" autofocus required>
            </div>
            <div class="col-6">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" maxlength="8" autofocus required>
            </div> --}}
            {{-- <div class="col-6">
                <label for="discount" class="form-label">Discount</label>
                <input type="number" class="form-control" id="discount" name="discount" maxlength="8" autofocus required>
            </div>
            <div class="col-6">
                <label for="total" class="form-label">Total</label>
                <input type="number" class="form-control" id="total" name="total" maxlength="8" autofocus required>
            </div> --}}
            <div class="col-6">
                <label for="note" class="form-label">Note</label>
                {{-- <input type="text" class="form-control" id="note" name="note" maxlength="8" autofocus required> --}}
                <textarea class="form-control" name="note" id="note" cols="30" rows="5"></textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
