<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SrchController extends Controller
{
    public function srch()
    {
		$users = DB::table('users')->get();
        //return View::make('index')->with('posts', $posts);
		return view ('search', compact('users'));
	}
}
