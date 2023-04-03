@extends('layouts/mainLayout')

@section('title', 'Teachers')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Teachers</li>
@endsection

@section('header', 'Teacher List')
@section('content')
    <div class="mb-4">
        <a href="/teacher-add" class="btn btn-primary">Add data</a>
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teacherList as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Action href">
                                <a href="teacher/{{ $item->id }}" class="btn btn-outline-success">Detail</a>
                                <a href="teacher-edit/{{ $item->id }}" class="btn btn-outline-info">Edit</a>
                                <a href="teacher-delete/{{ $item->id }}" class="btn btn-outline-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="my-3">
            {{ $teacherList->withQueryString()->links() }}
        </div>
    </div>
@endsection
