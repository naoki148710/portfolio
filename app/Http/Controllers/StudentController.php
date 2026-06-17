<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(student $student)
    {
        $students = Student::orderBy('created_at', 'desc')->paginate(10);

        return view('students.index')->with(['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Student $student, Request $request)
    {
        $input = $request['student'];
        $student->fill($input)->save();

        return redirect('/students/' . $student->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show')->with(['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit')->with(['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $input = $request['student'];
        $student->fill($input)->save();

        return redirect('/students/' . $student->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/students');
    }
}
