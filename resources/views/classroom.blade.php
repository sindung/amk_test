@extends('layouts/mainLayout')

@section('title', 'Class')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Classroom</li>
@endsection

@section('header', 'Class List')
@section('content')
    <div class="mb-4">
        <a href="/class-add" class="btn btn-primary">Add data</a>
    </div>

    @if (Session::has('status'))
        <div class="alert alert-{{ Session::get('alert') }}" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="table-responsive">
        <div class="my-2">
            <form action="" method="GET">
                <div class="row">
                    <div class="col-8 col-md-4">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control" placeholder="keyword"
                                aria-label="Search" aria-describedby="search">
                            <button class="btn btn-outline-primary" type="submit" id="search">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Action</th>
                    {{-- <th>Students</th> --}}
                    {{-- <th>Homeroom Teacher</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($classList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        {{-- <td>
                            <ol>
                                @foreach ($data->students as $student)
                                    <li>{{ $student['name'] }}</li>
                                @endforeach
                            </ol>
                        </td>
                        <td>{{ $data->homeroomTeacher->name }}</td> --}}
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Action href">
                                <a href="class/{{ $data->id }}" class="btn btn-outline-success">Detail</a>
                                <a href="class-edit/{{ $data->id }}" class="btn btn-outline-info">Edit</a>
                                <a href="class-delete/{{ $data->id }}" class="btn btn-outline-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="my-3">
            {{ $classList->withQueryString()->links() }}
        </div>
    </div>
@endsection
