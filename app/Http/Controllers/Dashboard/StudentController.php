<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Student;
use App\Classroom;
use App\Spp;
use App\Payment;

class StudentController extends Controller
{
    public function manageStudent()
    {
        $students = Student::all();
        return view('dashboard.managestudent', [
            'students' => $students
        ]);
    }

    public function studentInfo($id)
    {
        $student = Student::find($id);
        $spps = Spp::all();
        $payment = Payment::whereStudentId($student->id)->whereUserId(auth()->user()->id)->first();
        return view('dashboard.infostudent', [
            'student' => $student,
            'spps' => $spps,
            'payment' => $payment
        ]);
    }

    public function createStudentView()
    {
        $classrooms = Classroom::all();
        return view('dashboard.createstudent', [
            'classrooms' => $classrooms
        ]);
    }

    public function createStudentAction(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'nisn' => 'required|numeric',
            'nis' => 'required|numeric'
        ]);
        $student = Student::create($request->all());
        $classroom = Classroom::find($request->classroom_id);
        $classroom->update([
            'count' => $classroom->count += 1
        ]);
        Alert::success($student->name, 'Have Been Successfully Created!');
        return redirect(route('view.managestudent'));
    }

    public function changeStudentView($id)
    {
        $student = Student::find($id);
        $classrooms = Classroom::all();
        return view('dashboard.changestudent', [
            'student' => $student,
            'classrooms' => $classrooms
        ]);
    }

    public function changeStudentAction(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'nisn' => 'required|numeric',
            'nis' => 'required|numeric'
        ]);
        $student = Student::find($id);
        $classroom = Classroom::find($request->classroom_id);
        if ($student->classroom->name !== $classroom->name) {
            $student->classroom->update([
                'count' => $student->classroom->count -= 1
            ]);
            $classroom->update([
                'count' => $classroom->count += 1
            ]);
            $student->update($request->all());
            Alert::success($student->name, 'Have Been Successfully Changed!');
            return redirect(route('view.managestudent'));
        } else {
            $student->update($request->all());
            Alert::success($student->name, 'Have Been Successfully Changed!');
            return redirect(route('view.managestudent'));
        }
    }

    public function bannedStudent($id)
    {
        $student = Student::find($id);
        $student->classroom->update([
            'count' => $student->classroom->count -= 1
        ]);
        Alert::success($student->name, 'Have Been Successfully Banned!');
        $student->delete();
        return redirect(route('view.managestudent'));
    }
}
