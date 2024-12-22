<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Store the form data in the database.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'comment' => 'required|string',
        ]);

        // Store the data in the database
        Contactus::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'comment' => $validated['comment'],
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}

