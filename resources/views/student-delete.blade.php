@extends('layouts/mainLayout')

@section('title', 'Confirmation Delete Students')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Confirmation Delete Student</li>
@endsection

@section('content')
    <div class="">
        Are you sure to delete data : {{ $student->name }} - {{ $student->nis }} ?
        <br />
        <form class="d-inline-block" action="/student-destroy/{{ $student->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/students" class="btn btn-primary">Cancel</a>
    </div>
@endsection
