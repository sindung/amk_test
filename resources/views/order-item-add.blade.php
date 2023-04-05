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
                    <option value="" selected>Choose...</option>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="items">
                            <tr class="item">
                                <td>
                                    <label for="item_id-0" class="form-label">Item Name</label>
                                    <select id="item_id-0" name="item_ids[]" class="form-select" autofocus required>
                                        <option selected>Choose...</option>
                                        @foreach ($itemList as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <label for="qty-0" class="form-label">Qty</label>
                                    <input type="number" class="form-control" id="qty-0" name="qtys[]" maxlength="11"
                                        autofocus required>
                                </td>
                                <td>
                                    <label for="price-0" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="price-0" name="prices[]" maxlength="8"
                                        autofocus required>
                                </td>
                                <td>

                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">
                                    <button type="button" class="btn btn-primary" onclick="" id="add-item">Add
                                        Item</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>
                                    <label for="discount" class="form-label">Discount</label>
                                    <input type="number" class="form-control" id="discount" name="discount" maxlength="8"
                                        autofocus required>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>
                                    <label for="total" class="form-label">Total</label>
                                    <input type="number" class="form-control" id="total" name="total" maxlength="8"
                                        autofocus required>
                                </td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const addItemsButton = document.getElementById("add-item");
            const itemsContainer = document.getElementById("items");
            let index = 1;

            addItemsButton.addEventListener("click", function() {
                const item = document.createElement("tr");
                item.classList.add("item");
                item.innerHTML = `
                    <td>
                        <label for="item_id-${index}" class="form-label">Item Name</label>
                        <select id="item_id-${index}" name="item_ids[]" class="form-select" autofocus required>
                            <option selected>Choose...</option>
                            @foreach ($itemList as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <label for="qty-${index}" class="form-label">Qty</label>
                        <input type="number" class="form-control" id="qty-${index}" name="qtys[]" maxlength="11"
                            autofocus required>
                    </td>
                    <td>
                        <label for="price-${index}" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price-${index}" name="prices[]" maxlength="8"
                            autofocus required>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-danger remove-item" title="Remove"><i class="bi bi-trash3"></i></button>
                    </td>
                `;
                itemsContainer.appendChild(item);
                index++;
            });

            itemsContainer.addEventListener("click", function(event) {
                if (event.target.parentNode.classList.contains("remove-item")) {
                    event.target.parentNode.parentNode.parentNode.remove();
                }
            });
        });
    </script>

@endsection
