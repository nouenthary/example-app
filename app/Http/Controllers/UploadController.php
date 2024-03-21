<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload.index');
    }

    public function store(Request $request)
    {

        $originalName = $request->file->getClientOriginalName();

        $extension = $request->file->getClientOriginalExtension();

        $path = "dev"; //"table/" . "/" . $originalName . "." . $extension;

        $file = $request->file;

        Storage::disk('local')->put($path, $file);

        return $request->all();
    }
}
