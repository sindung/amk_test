<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Extracurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ExtracurricularController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        // $ekskul = Extracurricular::get();
        // $ekskul = Extracurricular::with('students')->get();
        // dd($ekskul);
        $ekskul = Extracurricular::where('name', 'LIKE', '%' . $keyword . '%')
            ->orderBy('id', 'desc')
            ->paginate(3); // select * from student
        return view('extracurricular', ['ekskulList' => $ekskul]);
    }

    public function show($id)
    {
        $ekskul = Extracurricular::with('students')->findOrFail($id);
        return view('extracurricular-detail', ['ekskul' => $ekskul]);
    }

    public function create()
    {
        $class = ClassRoom::select('id', 'name')->get();
        return view('extracurricular-add', ['classList' => $class]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'max:50|required',
        ]);

        // mass store
        $ekskul = Extracurricular::create($request->all());

        if ($ekskul) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data added succesfully.');
        }

        return redirect('/extracurricular');
    }

    public function edit($id)
    {
        $ekskul = Extracurricular::findOrFail($id);
        return view('extracurricular-edit', ['ekskul' => $ekskul]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $ekskul = Extracurricular::findOrFail($id);
        // $ekskul->name = $request->name;
        // $ekskul->gender = $request->gender;
        // $ekskul->nis = $request->nis;
        // $ekskul->class_id = $request->class_id;
        // $ekskul->save();

        // mass update
        $update = $ekskul->update($request->all());
        if ($update) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data updated succesfully.');
        }

        return redirect('/extracurricular');
    }

    public function delete($id)
    {
        // dd($id);
        $ekskul = Extracurricular::findOrFail($id);
        return view('extracurricular-delete', ['student' => $ekskul]);
    }

    public function destroy($id)
    {
        // dd($id);
        // $delete = DB::table('students')->where('id', $id)->delete();

        $delete = Extracurricular::findOrFail($id)->delete();

        if ($delete) {
            Session::flash('status', 'success');
            Session::flash('alert', 'success');
            Session::flash('message', 'Data deleted succesfully.');
        }

        return redirect('/extracurricular');
    }
}
