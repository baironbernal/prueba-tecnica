<?php

namespace App\Http\Controllers;
use App\Imagen;
use App\Input;
use Validator;
use Storage;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Redirect;

class ImageController extends Controller
{

   

    public function guardarImagen(request $request){
        //analizar cuantas imagenes ha subido el tipo 
        $id_user = $request->input('id_user');
        $numImages = Imagen::where('id_user', $id_user)->count();
        $extpermitidas = array('jpg' =>'jpg' , 'jpeg' =>'jpeg');
        $nameimg = $request->image->getClientOriginalName();
        $img = $request->file('image');

        if($numImages == 3){
            $cantmax = "No puede subir mas de 10 fotos";
            return back()->withErrors($cantmax);
        }

        $validator = Validator::make($request->all(),[
            'id_user' => 'required',
            'image' => 'required|image',
            'describe' => 'required|max:55',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        else{
            if (in_array($request->image->getClientOriginalExtension(), $extpermitidas)) {
            $path = Storage::putFileAs(
                    'public', $img, $nameimg
                );
            //indicamos que queremos guardar un nuevo archivo en el disco local
                $guardar = Imagen::create([
                    'id_user' => $id_user,
                    'img' => $nameimg,
                    'describe' => $request->input('describe'),
                ]);
                Session::flash('message', 'Carga exitosa');
                return Redirect::back();
            }
        }
        
        
	}

}