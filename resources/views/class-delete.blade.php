@extends('layouts/mainLayout')

@section('title', 'Confirmation Delete Class')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Confirmation Delete Class</li>
@endsection

@section('content')
    <div class="">
        Are you sure to delete data : {{ $class->name }} - {{ $class->id }} ?
        <br />
        <form class="d-inline-block" action="/class-destroy/{{ $class->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/class" class="btn btn-primary">Cancel</a>
    </div>
@endsection
