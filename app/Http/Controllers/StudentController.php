<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function viewAllStudentData()
    {
        $students = Student::all();

        return view('viewData', compact('students'));
    }

    public function filterMtoF(Request $request)
    {
        $genderFilter = $request->input('gender'); 

        $students = Student::when($genderFilter, function ($query) use ($genderFilter) {
            return $query->where('sex', $genderFilter);
        })->get();

        return view('viewData', compact('students'));
    }
}

