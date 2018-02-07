<?php

namespace App\Http\Controllers;
use App\Imagen;
use App\Input;
use Validator;
use Storage;
use File;


use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function showForm()
    {
    	return view("image.show");
    }

    public function guardarImagen(request $request){

        //analizar cuantas imagenes ha subido el tipo 
        $id_user = $request->input('id_user');
        $numImages = Imagen::where('id_user', $id_user)->count();
        var_dump($numImages);

        if($numImages == 10 ){
            $cantmax = "No puede subir mas de 10 fotos";
            return back()->withErrors($cantmax);
        }


        $validator = Validator::make($request->all(),[
            'id_user' => 'required',
            'img' => 'required|image',
            'describe' => 'required|max:55',
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        
        $imgPath = $request->img->store('storage');

       //indicamos que queremos guardar un nuevo archivo en el disco local

        var_dump($request->input('id_user'));
        $guardar = Imagen::create([
            'id_user' => $id_user,
            'img' => $imgPath,
            'describe' => $request->input('describe'),
        ]);
	}
}