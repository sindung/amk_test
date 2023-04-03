@extends('layouts/mainLayout')

@section('title', 'Edit Students')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Edit Student</li>
@endsection

@section('header', 'Edit Students')
@section('content')
    <div class="">
        <form class="row g-3" method="POST" action="/student/{{ $student->id }}">
            @method('PUT')
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" maxlength="50"
                    value="{{ $student->name }}" autofocus required>
            </div>
            <div class="col-md-6">
                <label for="gender" class="form-label">Gender</label>
                <select id="gender" name="gender" class="form-select" autofocus required>
                    <option selected>Choose...</option>
                    <option value="{{ $student->gender }}" selected>
                        {{ $student->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}
                    </option>
                    @if ($student->gender == 'L')
                        <option value="P">Perempuan</option>
                    @else
                        <option value="L">Laki-laki</option>
                    @endif
                </select>
            </div>
            <div class="col-6">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" maxlength="10"
                    value="{{ $student->nis }}" autofocus required>
            </div>
            <div class="col-6">
                <label for="class_id" class="form-label">Class</label>
                <select id="class_id" name="class_id" class="form-select" autofocus required>
                    <option selected>Choose...</option>
                    @foreach ($classList as $item)
                        <option value="{{ $item->id }}" {{ $student->class_id == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
