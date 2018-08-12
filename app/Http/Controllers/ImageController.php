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
use App\User;
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
        $user = User::find(Auth::id());

        if ($user->hasRole('super-admin')) {
            return "SISASISASAS";
        }
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

        $id_user = Auth::id();
        $identification = User::find($id_user);

        $img = $request->file('image');

        $validator = Validator::make($request->all(),[
            'image' => 'required|image',
            'description' => 'required|max:55',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        else{   
            $imgName = $img->getClientOriginalName();
            $path = $img->storeAs('img', $imgName);
            
                $storeImage = Image::create([
                    'id_user' => $identification->identification,
                    'img' => $imgName,
                    'description' => $request->input('description'),
                ]);
                Session::flash('message', 'Carga exitosa');
                return Redirect::back();
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
