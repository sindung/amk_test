@extends('layouts/mainLayout')

@section('title', 'Edit Customer')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Edit Customer</li>
@endsection

@section('header', 'Edit Customer')
@section('content')
    <div class="">
        <form class="row g-3" method="POST" action="/customers/{{ $customer->id }}">
            @method('PUT')
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="50"
                    value="{{ $customer->name }}" autofocus required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
