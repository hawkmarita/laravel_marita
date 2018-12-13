<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use jQuery;
use Album;

class SrchController extends Controller
{
    public function srch()
    {
		$users = Album::get();
        //return View::make('index')->with('posts', $posts);
		return view ('search')->with('users', $users);
	}
}
