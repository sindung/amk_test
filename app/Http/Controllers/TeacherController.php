<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        $teacher = Teacher::where('name', 'LIKE', '%' . $keyword . '%')
            ->orderBy('id', 'desc')
            ->paginate(3);
        return view('teacher', ['teacherList' => $teacher]);
    }

    public function show($id)
    {
        $teacher = Teacher::with('class.students')->findOrFail($id);
        return view('teacher-detail', ['teacher' => $teacher]);
    }

    public function create()
    {
        $class = ClassRoom::select('id', 'name')->get();
        return view('teacher-add', ['classList' => $class]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:50|required',
        ]);

        // mass store
        $teacher = Teacher::create($request->all());

        if ($teacher) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data added succesfully.');
        }

        return redirect('/teacher');
    }

    public function edit($id)
    {
        $teacher = Teacher::with('class')->findOrFail($id);
        return view('teacher-edit', ['teacher' => $teacher]);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        // mass update
        $update = $teacher->update($request->all());
        if ($update) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data updated succesfully.');
        }

        return redirect('/teacher');
    }

    public function delete($id)
    {
        // dd($id);
        $teacher = Teacher::findOrFail($id);
        return view('teacher-delete', ['student' => $teacher]);
    }

    public function destroy($id)
    {
        // dd($id);
        // $delete = DB::table('students')->where('id', $id)->delete();

        $delete = Teacher::findOrFail($id)->delete();

        if ($delete) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data deleted succesfully.');
        }

        return redirect('/teacher');
    }
}
