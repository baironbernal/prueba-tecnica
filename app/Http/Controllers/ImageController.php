<?php

namespace App\Http\Controllers;
use App\Imagen;
use App\Input;
use Validator;


use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function showForm()
    {
    	return view("image.show");
    }

    public function guardarImagen(request $request){
    	
    	$validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'img' => 'required|image',
            'description' => 'required|image',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $file = $request->file('image');

        $uploadPath = $file->store('uploads');

        $post = Imagen::create([
            'id_user' => $request->input('id_user'),
            'excerpt' => $request->input('excerpt'),
            'image' => $uploadPath,
            'slug' => str_slug($request->input('title'), '-'),
            'description' => $request->input('description'),
        ]);
	}
}