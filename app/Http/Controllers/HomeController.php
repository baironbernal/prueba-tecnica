<?php

namespace App\Http\Controllers;

use App\Image;

use Illuminate\Support\Facades\Auth;
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
        $viewimages = Image::all();
        $idusuario = Auth::user()->identificacion; 
        $viewimages = Image::where('id_user', $idusuario)->get();
        return view('home', compact("viewimages",$viewimages));
    }
}
