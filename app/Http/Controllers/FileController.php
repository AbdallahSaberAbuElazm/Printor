<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $files = File::paginate(env('PAGINATEION_COUNT'));
        return view('files.file-upload')->with([
            'files'=>$files
        ]);
    }

    public function store(Request $request)
    {
        //required|csv,txt,xlx,xls,pdf|max:2048
        $request->validate([
            'file' => 'required',

        ]);
        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/storage/public/files');

        $file = new File();
        $extension = explode('/', $path);
        $fileName = end($extension);
        $file->name = $name;
        $file->path = $fileName;
        $file->extension = $request->file('file')->getMimeType();
       // $extension = $request->file('file')->extension();
        $path = public_path('storage/public/files' . '/' . $fileName);
        $file->page = $this->countPages($path);

        $file->save();

        return redirect()->route('file-upload')->with('status', 'File Has been uploaded successfully in laravel 8');
    }

    public function countPages($path)
    {
        $pdftext = file_get_contents($path);

        $num = preg_match_all("/\/Page\W/", $pdftext, $dummy);
        return $num;
    }

    public function showFile($id)
    {
        $file = File::find($id);
        $extension = $file->extension;

        $fileName = $file->path;
        // file path
        $path = public_path('storage\public\files' . '\\' . $fileName);
        $header = [
            'Content-Type'        => $extension,
            'Content-Disposition' => 'inline; filename="' . $fileName . '"',
        ];

        return response()->file($path, $header);
    }

    public function deleteFile(Request $request){
        $validate = $request->validate([
            'file_id' => 'required',
        ]);
        $id = intval($request->input('file_id'));
        $file = File::find($id);
        if(file_exists(public_path('storage\public\files' . '\\' . $file->path))){
            File::destroy($id);
            unlink(public_path('storage\public\files' . '\\' . $file->path));
        }
        return redirect()->route('file-upload');
    }

}
