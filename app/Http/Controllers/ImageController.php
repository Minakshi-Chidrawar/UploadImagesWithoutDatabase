<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('imageView');
    }

    public function store($request)
    {
        $imageName = $request->file->getClientOriginalName();
        $request->file->move(public_path('upload'), $imageName);
        return response()->json(['uploaded'=>'/upload/'.$imageName]);
    }
}
