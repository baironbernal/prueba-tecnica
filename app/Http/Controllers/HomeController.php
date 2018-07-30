<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Image;
=======
use App\Imagen;
use Illuminate\Support\Facades\Auth;
>>>>>>> 746cd979c96e2e3ddf46b6bd6ec87bfac89ea414
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
<<<<<<< HEAD
        $viewimages = Image::all();
=======
        $idusuario = Auth::user()->identificacion; 
        $viewimages = Imagen::where('id_user', $idusuario)->get();
>>>>>>> 746cd979c96e2e3ddf46b6bd6ec87bfac89ea414
        return view('home', compact("viewimages",$viewimages));
    }
}
