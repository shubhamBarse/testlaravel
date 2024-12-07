<?php
namespace App\Http\Controllers;

use App\Models\Student;

class StudentData extends Controller
{
    public function show()
    {
        // Eager load the addresses and student images relationship
        $students = Student::with('addresses') // Eager load the 'addresses' relationship
            ->leftJoin('student_images', 'students.id', '=', 'student_images.student_id') // Join with the 'student_images' table
            ->select('students.*', 'student_images.image_path') // Select necessary columns
            ->get();

        // Pass the data to the view
        return view('studentgrid', compact('students'));
    }
}


