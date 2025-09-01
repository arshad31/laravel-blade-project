<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function showFileUploadForm()
    {
        return view('file-upload');
    }
    public function storeFile(Request $request)
    {

        $request->validate([
            'file' => 'required|file|max:2048'
        ]);

        $path = $request->file('file')->store('uploads');

        return redirect('/upload-file')
            ->with('success', 'File uploaded successfully!')
            ->withCookie(cookie('file_uploaded', 'true', 60));
    }
}
