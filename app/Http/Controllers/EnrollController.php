<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class EnrollController extends Controller
{
    private $student, $enroll, $enrollExist;

    public function index($id)
    {
        if (Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        return view('website.enroll.index', ['id' => $id, 'student' => $this->student]);
    }
    public function newEnroll(Request $request, $id)
    {
        if (Session::get('student_id'))
        {
            $this->student = Student::find(Session::get('student_id'));
        }
        else
        {
            $this->validate($request, [
                'name' => 'required|regex:/^[a-zA-Z- ]+$/',
                'email' => 'required|unique:students,email',
                'mobile' => 'required|unique:students,mobile',
            ]);
            $this->student = Student::newStudent($request);
        }

        $this->enrollExist = Enroll::where(['student_id' => $this->student->id, 'course_id'=> $id])->first();
        if ($this->enrollExist)
        {
            return redirect()->back()->with('message', 'Sorry...you already enroll this course.');
        }

        $this->enroll = Enroll::newEnroll($request, $this->student->id, $id);

        Session::put('student_id', $this->student->id);
        Session::put('student_name', $this->student->name);

        return redirect('/training-complete-enroll/'. $this->enroll->id);
    }
    public function completeEnroll($id)
    {
        return view('website.enroll.complete-enroll', ['enroll' => Enroll::find($id)]);
    }



}
