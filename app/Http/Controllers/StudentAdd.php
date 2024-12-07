<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentImage;
use App\Models\Address;  // Import Address model
use Illuminate\Support\Facades\Hash;

class StudentAdd extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone_number' => 'required|string|unique:students,phone_number',
            'password' => 'required|min:6',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'city' => 'required|string|max:255', // Validate city
            // Add other address fields to validate if necessary
        ]);
    
        // Store the profile image
        $imagePath = $request->file('profile_image')->store('student_images', 'public');
    
        // Create the student record
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);
    
        // Create the student image record
        StudentImage::create([
            'student_id' => $student->id,
            'image_path' => $imagePath,
        ]);

        // Store the address related to the student
        $address = $student->addresses()->create([
            'city' => $request->city,
            // Add other address fields from the request here
        ]);
    
        // Redirect to another page (StudentData::show method) with success message
        return redirect()->action([StudentData::class, 'show'])
            ->with('success', 'Student registered successfully!');
    }
    public function edit($id)
    {
        // Fetch the student record along with the associated image
        $student = Student::select('students.*', 'student_images.image_path')
            ->leftJoin('student_images', 'students.id', '=', 'student_images.student_id')
            ->where('students.id', $id)
            ->first();
    
        // Check if the student exists
        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }
    
        // Return the view with the fetched student data
        return view('update', compact('student'));
    }
    

    public function modifyData(Request $request, $id)
    {
        $student = Student::find($id);
    
        if (!$student) {
            return redirect()->back()->with('error', 'Student not found.');
        }
    
        // Validate the inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone_number' => 'required|string|unique:students,phone_number,' . $student->id,
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow updating without changing the image
        ]);
    
        // Update fields
        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);
    
        // Handle image upload
        if ($request->hasFile('profile_image')) {
            // Store the new image
            $imagePath = $request->file('profile_image')->store('student_images', 'public');
    
            // Update the image in the database
            StudentImage::updateOrCreate(
                ['student_id' => $student->id], // Find by student ID
                ['image_path' => $imagePath]    // Update or create new record
            );
        }
    
        return redirect()->action([StudentData::class, 'show'])->with('success', 'Student updated successfully!');
    }

}

