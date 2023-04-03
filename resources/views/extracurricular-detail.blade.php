@extends('layouts/mainLayout')

@section('title', 'Detail Extracurricular')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Detail Extracurricular</li>
@endsection

@section('content')
    <h3>Detail Extracurricular {{ $ekskul->name }}</h3>

    {{-- {{ $ekskul }} --}}

    <h3>List Peserta</h3>
    <ol>
        @foreach ($ekskul->students as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ol>
@endsection
