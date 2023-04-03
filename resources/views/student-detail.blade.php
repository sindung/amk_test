@extends('layouts/mainLayout')

@section('title', 'Detail Student')

@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Detail Student</li>
@endsection

@section('content')
    <h3>Detail Student {{ $student->name }}</h3>

    {{-- {{ $student }} --}}

    <div class="table-responsive mt-4 mb-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Gender</th>
                    <th>Class</th>
                    <th>Homeroom Teacher</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $student->nis }}</td>
                    <td>
                        @if ($student->gender == 'P')
                            Perempuan
                        @else
                            Laki-laki
                        @endif
                    </td>
                    <td>{{ $student->class->name }}</td>
                    <td>
                        {{ $student->class->homeroomTeacher->name }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <h3>Extracurriculars</h3>

        <ol>
            @foreach ($student->extracurriculars as $item)
                <li>{{ $item->name }}</li>
            @endforeach
        </ol>
    </div>
@endsection
