@extends('layouts/mainLayout')

@section('title', 'Deleted Customer')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Deleted Customers</li>
@endsection

@section('header', 'Deleted Customer List')
@section('content')
    <div class="mb-4">
        <a href="/customers" class="btn btn-primary">Back</a>
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
                    <th>Address</th>
                    <th>Phone</th>
                    @if (Auth::user()->role_id == '690176ab-ae8f-4813-bc92-4b0a92a5d5d9')
                        <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedList as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->phone }}</td>
                        @if (Auth::user()->role_id == '690176ab-ae8f-4813-bc92-4b0a92a5d5d9')
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Action href">
                                    <a href="/customers-restore/{{ $item->id }}"
                                        class="btn btn-outline-info">Restore</a>
                                </div>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="my-3">
            {{-- {{ $deletedList->withQueryString()->links() }} --}}
        </div>
    </div>
@endsection
