<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Show the form
    public function showForm()
    {
        return view('contact-form');
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
        // Validation
        $request->validate([
            'name'  => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string|max:300',
        ]);

        // Store data in session
        session([
            'formData' => $request->only('name', 'email', 'message'),
            'success' => 'Form submitted successfully!'
        ]);

        // Redirect to confirmation page
        return redirect()->route('contact.confirm');
    }

    // Show confirmation page
    public function confirm()
    {
        $formData = session('formData');
        $successMessage = session('success');

        if (!$formData) {
            return redirect()->route('contact.form');
        }

        return view('contact-confirm', compact('formData', 'successMessage'));
    }
}
