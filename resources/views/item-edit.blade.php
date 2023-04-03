@extends('layouts/mainLayout')

@section('title', 'Edit Item')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Edit Item</li>
@endsection

@section('header', 'Edit Item')
@section('content')
    <div class="">
        <form class="row g-3" method="POST" action="/item/{{ $items->id }}">
            @method('PUT')
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="50"
                    value="{{ $items->name }}" autofocus required>
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" maxlength="8"
                    value="{{ $items->price }}" autofocus required>
            </div>
            <div class="col-md-6">
                <label for="description" class="form-label">Description</label>
                {{-- <input type="text" class="form-control" id="description" name="description" maxlength="50"
                    value="{{ $items->description }}" autofocus required> --}}
                <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{ $items->description }}</textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
