@extends('layouts/mainLayout')

@section('title', 'Add New Students')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Add Student</li>
@endsection

@section('header', 'Add New Students')
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
        <form class="row g-3" method="POST" action="student">
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="50" autofocus required>
            </div>
            <div class="col-md-6">
                <label for="gender" class="form-label">Gender</label>
                <select id="gender" name="gender" class="form-select" autofocus required>
                    <option selected>Choose...</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="col-6">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" maxlength="10" autofocus required>
            </div>
            <div class="col-6">
                <label for="class_id" class="form-label">Class</label>
                <select id="class_id" name="class_id" class="form-select" autofocus required>
                    <option selected>Choose...</option>
                    @foreach ($classList as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
