<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Resources\Views\students;
use Resources\Views\cohorts;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));

    }
    
    public function create()
    {
        $student = new Student();
        return view('students.create', compact('student'));
    }


    public function store()
    {
       
        Student::create($this->validateRequest());

        return redirect('students');
        
    }

    public function show(Student $student)
    {
       
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Student $student)
    {
        
        $student->update($this->validateRequest());

        return redirect('students/' . $student->id);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('students');
    }

    public function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
        ]);
    }
}
