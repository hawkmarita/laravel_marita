<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use jQuery;

class InstController extends Controller
{


    public function insta()
    {
		return view ('photogallery');
	}
}
