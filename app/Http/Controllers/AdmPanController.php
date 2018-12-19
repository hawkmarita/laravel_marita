<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Request;
use DB;

class AdmPanController extends Controller
{
    public function tratata(Request $request)
    {
        $query = Request::input('users');
        $users = DB::table('users')->paginate(10);
        return view('adminpan', compact('users', 'query'));
        //return view('adminpan', ['users' => $users]);
        //return view('user.adminpan', ['user' => $users]); 
        //return view ('adminpan');
        //$users = DB::table('users');
        //return view('adminpan', compact('users'));
    }
    
    public function search(Request $request)
    {
        $query = Request::input('search');
        $users = DB::table('users')->where('name', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('adminpan', compact('users', 'query'));
    }
}