<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(10);
        if($key = request()->key){
            $students = Student::where('studentcode', 'like', '%' . $key . '%')->paginate(10);
        } 
        return view('students.index', compact('students'))->with('i', (request()->input('page', 1) - 1) * 10);
    }


    public function create()
    {
        return view('students.create');
    }


    public function store(Request $request)
    {
    $request->validate([
        'major' => 'required|string|max:255',
        'class' => 'required|string|max:255',
        'studentcode' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
    ]);

    Student::create($request->all());

    return redirect()->route('students.index')->with('success', 'Sinh viên đã được thêm thành công.');
    }


    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }


    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }


    public function update(Request $request, Student $student)
    {
        $request->validate([
            'major' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'studentcode' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Cập nhật thông tin thành công.');
    }


    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Xóa sinh viên thành công.');
    }

}
