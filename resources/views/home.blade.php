@extends('layouts/mainLayout')

@section('title', 'Home')

@section('header', 'Home')
@section('content')
    <div class="bd-callout bd-callout-info">
        Selamat datang, {{ Auth::user()->name }}. Role anda adalah {{ Auth::user()->role->name }}.
    </div>
@endsection
