@extends('layouts/mainLayout')

@section('title', 'Detail Class')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Detail Class</li>
@endsection

@section('content')
    <h3>Detail Class {{ $class->name }}</h3>

    {{-- {{ $class }} --}}

    <p>
        Homeroom Teacher : <strong>{{ $class->homeroomTeacher->name }}</strong>
    </p>

    <h3>Student List</h3>

    <ol>
        @foreach ($class->students as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ol>
@endsection
