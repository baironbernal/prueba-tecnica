<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;


class FrontPagesController extends Controller
{
    public function index(){
    	$imgs = Image::all();
    	return view('image.main')->with('imgs',$imgs);
    }
}
