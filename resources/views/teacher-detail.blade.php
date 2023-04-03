@extends('layouts/mainLayout')

@section('title', 'Detail Teacher')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Detail Teacher</li>
@endsection

@section('content')
    <h3>Detail Teacher {{ $teacher->name }}</h3>

    {{-- {{ $teacher }} --}}

    <p>
        Class :
        @if ($teacher->class)
            <strong>{{ $teacher->class->name }}</strong>
        @else
            -
        @endif
    </p>

    <h3>List Student</h3>
    @if ($teacher->class)
        <ol>
            @foreach ($teacher->class->students as $item)
                <li>{{ $item->name }}</li>
            @endforeach
        </ol>
    @else
        -
    @endif

@endsection
