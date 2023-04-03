@extends('layouts/mainLayout')

@section('title', 'Add New Customer')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Add Customer</li>
@endsection

@section('header', 'Add New Customer')
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
        <form class="row g-3" method="POST" action="customers">
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="50" autofocus required>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" maxlength="50" autofocus required>
            </div>
            <div class="col-md-6">
                <label for="address" class="form-label">Address</label>
                {{-- <input type="text" class="form-control" id="address" name="address" maxlength="50" autofocus required> --}}
                <textarea class="form-control" name="address" id="address" cols="30" rows="5" maxlength="250"></textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
