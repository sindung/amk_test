<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        // dd('test');
        // $nama = 'Hofar Ismail';
        // return view('student', ['nama' => $nama]);

        $keyword = $request->keyword;
        // dd($keyword);

        // eloquent orm (rekomendasi)
        // query builder
        // raw query

        // lazy load
        // $student = Student::get(); // select * from student
        // eager load
        // $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->get(); // select * from student
        // dd($student);
        // paginate
        $student = Student::with('class')
            ->where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('gender', $keyword)
            ->orWhere('nis', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('class', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(3); // select * from student
        // $student = Student::simplePaginate(3); // select * from student
        return view('student', ['studentList' => $student]);
    }

    public function show($id)
    {
        // dd($id);
        $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }

    public function create()
    {
        $class = ClassRoom::select('id', 'name')->get();
        return view('student-add', ['classList' => $class]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $student = new Student;
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();

        $request->validate([
            'name' => 'max:50|required',
            'gender' => 'required',
            'nis' => 'unique:students|max:10|required', // unique dari tabel students | max:10
            'class_id' => 'required',
        ]);

        // mass store
        $student = Student::create($request->all());

        if ($student) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data added succesfully.');
        }

        return redirect('/students');
    }

    public function edit($id)
    {
        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::get(['id', 'name']);
        return view('student-edit', ['student' => $student, 'classList' => $class]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $student = Student::findOrFail($id);
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();

        // mass update
        $update = $student->update($request->all());
        if ($update) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data updated succesfully.');
        }

        return redirect('/students');
    }

    public function delete($id)
    {
        // dd($id);
        $student = Student::findOrFail($id);
        return view('student-delete', ['student' => $student]);
    }

    public function destroy($id)
    {
        // dd($id);
        // $delete = DB::table('students')->where('id', $id)->delete();

        $delete = Student::findOrFail($id)->delete();

        if ($delete) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data deleted succesfully.');
        }

        return redirect('/students');
    }
}
