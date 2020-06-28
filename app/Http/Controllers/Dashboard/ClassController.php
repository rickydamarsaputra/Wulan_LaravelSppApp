<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Classroom;

class ClassController extends Controller
{
    public function manageClass()
    {
        $classes = Classroom::all();
        return view('dashboard.manageclass', [
            'classes' => $classes
        ]);
    }

    public function studentOnClass($id)
    {
        $classroom = Classroom::find($id);
        return view('dashboard.studentonclass', [
            'classroom' => $classroom
        ]);
    }

    public function createClass(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:5',
            'competence' => 'required|min:5'
        ]);

        $class = Classroom::create([
            'name' => $request->name,
            'competence' => $request->competence
        ]);
        Alert::success($class->name, 'The Class Has Been Successfully Created!');
        return redirect(route('view.manageclass'));
    }

    public function changeClassView($id)
    {
        $class = Classroom::find($id);
        return view('dashboard.changeclass', [
            'class' => $class
        ]);
    }

    public function changeClassAction(Request $request, $id)
    {
        $class = Classroom::find($id);
        $class->update([
            'name' => $request->name,
            'competence' => $request->competence
        ]);
        Alert::success($class->name, 'Have Been Successfully Changed!');
        return redirect(route('view.manageclass'));
    }

    public function bannedClass($id)
    {
        $class = Classroom::find($id);
        Alert::success($class->name, 'Have Been Successfully Banned!');
        $class->delete();
        return redirect(route('view.manageclass'));
    }
}
