<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
//use jQuery;
use Request;
//use DB;

class AdmPanController extends Controller
{
    public function tratata()
    {
        //$users = DB::table('users'); 
        //return view('user.index', ['users' => $users]); 
        return view ('adminpan');
    }
}