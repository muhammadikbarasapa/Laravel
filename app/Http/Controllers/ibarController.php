<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IbarController extends Controller
{
    public function home(){
		return view('home');
	}
 
	public function bout(){
		return view('bout');
	}
 
	public function tutorr(){
		return view('tutorr');
	}
	
}
