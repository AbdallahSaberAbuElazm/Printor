<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index(){
        return view('files.file-upload');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'file' => 'required|csv,txt,xlx,xls,pdf|max:2048',

           ]);
        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/files');

        $save = new File();
        $save->name = $name;
        $save->path = $path;
        return redirect('file-upload')->with('status', 'File Has been uploaded successfully in laravel 8');
    }
}
