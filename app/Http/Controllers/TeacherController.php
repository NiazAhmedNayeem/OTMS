<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('admin.teacher.index');
    }

    public function create(Request $request)
    {
        Teacher::newTeacher($request);
        return redirect('/teacher/add')->with('message', 'Teacher info create successfully.');
    }

    public function manage()
    {
        return view('admin.teacher.manage', [
            'teachers' => Teacher::orderBy('id', 'desc')->get(),
        ]);
    }

    public function edit($id)
    {
        return view('admin.teacher.edit', ['teacher' => Teacher::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Teacher::updateTeacher($request, $id);
        return redirect('/teacher/manage')->with('message', 'Teacher info update successfully.');
    }

    public function delete($id)
    {
        Teacher::deleteTeacher($id);
        return redirect('/teacher/manage')->with('message', 'Teacher info delete successfully.');
    }
}
