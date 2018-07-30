<?php

namespace App\Http\Controllers;

use App\Image;
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //analizar cuantas imagenes ha subido el tipo 
        $id_user = $request->input('id_user');
        $numImages = Image::where('id_user', $id_user)->count();
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
            'description' => 'required|max:55',
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
                    'description' => $request->input('description'),
                ]);
                Session::flash('message', 'Carga exitosa');
                return Redirect::back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
