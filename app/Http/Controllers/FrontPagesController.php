<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagen;


class FrontPagesController extends Controller
{
    public function index(){
    	$imgs = Imagen::all();
    	return view('image.main')->with('imgs',$imgs);
    }
}
