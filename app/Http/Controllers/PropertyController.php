<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('properties.index');
    }

    public function show($id)
    {
        $property = Property::findOrFail($id);
        // Fetch additional images or details as needed
        return view('properties.show', compact('property'));
    }

    public function submitFeedback(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'feedback' => 'required|string',
        ]);

        // Save the feedback to the database
        $property = Property::findOrFail($id);
        $property->feedback()->create([
            'feedback' => $request->input('feedback'),
            // Add other relevant fields
        ]);

        return redirect()->back()->with('success', 'Feedback submitted successfully.');
    }
}
