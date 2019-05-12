<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Carbon\Carbon;

class ImageController extends Controller
{
    public function index()
    {
    	return view('image-view');
    }

    public function store(Request $request)
    {
        $path = public_path() . '/upload/' . Carbon::now()->isoFormat("DDMMYYYY") . '/';   
   
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true);
        }

    	$imageName = request()->file->getClientOriginalName();
        request()->file->move($path, $imageName);

        return response()->json(['uploaded' => $path . $imageName]);
    }

    public function create()
    {
        // $dir = public_path() . '\upload';

        // foreach(glob($dir . '\*', GLOB_ONLYDIR) as $folder)
        // {
        //     dd($folder);
        // }
        //$imagesName[] = "";
        $imagesPath = public_path() . '\upload\12052019';
        $pattern = "\.(jpg|jpeg|JPG|JPEG|png|PNG|gif|GIF)$/";

        $images = glob($imagesPath . '\*');
        foreach ($images as $image)
        {
            $imagePath = "";            
            $imagesName[] = basename($image);
        }
        //dd($imagesName);
        //dd(collect($imagesName)->chunk(3));
        return view('viewImage')->with('images', $imagesName);
    }
}