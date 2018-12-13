<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use jQuery;

class SrchController extends Controller
{
    public function srch()
    {
		return view ('search');
	}
}
