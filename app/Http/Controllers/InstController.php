<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use jQuery;
use Request;
use DB;

class InstController extends Controller
{


    public function insta()
    {
		$query = 'dolls';
        $images = DB::table('photosgallery')->where('name', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('photogallery', compact('photosgallery', 'query'));

		//$images = 
		/*$photosgallery = Album::get();*/
		//return view ('photogallery')/*->with('description', $photosgallery)*/;
	}
}
