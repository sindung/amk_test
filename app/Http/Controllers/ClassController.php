<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClassController extends Controller
{
    public function index(Request $request)
    {
        // dd('test');
        // $nama = 'Hofar Ismail';
        // return view('student', ['nama' => $nama]);

        $keyword = $request->keyword;

        // eloquent orm (rekomendasi)
        // query builder
        // raw query

        // lazy load
        // $class = ClassRoom::get();
        // select * from table class
        // select * from student where class = 1A
        // select * from student where class = 1B
        // select * from student where class = 1C
        // select * from student where class = 1D

        // eager load
        // $class = ClassRoom::with(['students', 'homeroomTeacher'])->get();
        // select * from table class
        // select * from student where class in (1a,1b,1c,1d)

        // dd($student);
        $class = ClassRoom::where('name', 'LIKE', '%' . $keyword . '%')
            ->orderBy('id', 'desc')
            ->paginate(3);
        return view('classroom', ['classList' => $class]);
    }

    public function show($id)
    {
        $class = ClassRoom::with(['students', 'homeroomTeacher'])->findOrFail($id);
        return view('class-detail', ['class' => $class]);
    }
    public function create()
    {
        $class = ClassRoom::select('id', 'name')->get();
        return view('class-add', ['classList' => $class]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:50|required',
        ]);

        // mass store
        $student = ClassRoom::create($request->all());

        if ($student) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data added succesfully.');
        }

        return redirect('/class');
    }

    public function edit($id)
    {
        $class = ClassRoom::findOrFail($id);
        return view('class-edit', ['class' => $class]);
    }

    public function update(Request $request, $id)
    {
        $student = ClassRoom::findOrFail($id);

        // mass update
        $update = $student->update($request->all());
        if ($update) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data updated succesfully.');
        }

        return redirect('/class');
    }

    public function delete($id)
    {
        $class = ClassRoom::findOrFail($id);
        return view('class-delete', ['class' => $class]);
    }

    public function destroy($id)
    {
        $delete = ClassRoom::findOrFail($id)->delete();

        if ($delete) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data deleted succesfully.');
        }

        return redirect('/class');
    }
}
