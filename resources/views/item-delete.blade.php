@extends('layouts/mainLayout')

@section('title', 'Confirmation Delete')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Confirmation Delete</li>
@endsection

@section('header', 'Confirmation Delete')
@section('content')
    <div class="">
        Are you sure to delete data : {{ $items->name }} - {{ $items->id }} ?
        <br />
        <form class="d-inline-block mt-2" action="/item-destroy/{{ $items->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/items" class="btn btn-primary">Cancel</a>
    </div>
@endsection
