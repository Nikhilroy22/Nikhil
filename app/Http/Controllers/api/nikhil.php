<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class nikhil extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required', // Example validation rules
        ]);
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName);
       
        return redirect()->back()->with('message', 'File uploaded successfully.');
    }
}
