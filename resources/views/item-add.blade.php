@extends('layouts/mainLayout')

@section('title', 'Add New Item')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Add Item</li>
@endsection

@section('header', 'Add New Item')
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
        <form class="row g-3" method="POST" action="item">
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="50" autofocus required>
            </div>
            <div class="col-6">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" maxlength="10" autofocus required>
            </div>
            <div class="col-6">
                <label for="description" class="form-label">Description</label>
                {{-- <input type="text" class="form-control" id="description" name="description" maxlength="10" autofocus required> --}}
                <textarea class="form-control" name="description" id="description" cols="30" rows="5" maxlength="250"></textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
