@extends('layouts/mainLayout')

@section('title', 'Students')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Student</li>
@endsection

@section('header', 'Student List')
@section('content')
    <div class="mb-4">
        <a href="/students-add" class="btn btn-primary">Add data</a>
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
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>NIS</th>
                    {{-- <th>Class ID</th> --}}
                    <th>Class Name</th>
                    {{-- <th>Extracurriculars</th> --}}
                    {{-- <th>Homeroom Teacher</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($studentList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->nis }}</td>
                        {{-- <td>{{ $data->class_id }}</td> --}}
                        <td>{{ $data->class['name'] }}</td>
                        {{-- <td>{{ $data->class->name }}</td> --}}
                        {{-- <td>
                            <ol>
                                @foreach ($data['extracurriculars'] as $item)
                                    <li>{{ $item->name }}</li>
                                @endforeach
                            </ol>
                        </td>
                        <td>{{ $data->class->homeroomTeacher->name }}</td> --}}
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Action href">
                                <a href="student/{{ $data->id }}" class="btn btn-outline-success">Detail</a>
                                <a href="student-edit/{{ $data->id }}" class="btn btn-outline-info">Edit</a>
                                <a href="student-delete/{{ $data->id }}" class="btn btn-outline-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="my-3">
            {{ $studentList->withQueryString()->links() }}
        </div>
    </div>
@endsection
