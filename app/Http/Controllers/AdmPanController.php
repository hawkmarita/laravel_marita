<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; 

class AdmPanController extends Controller
{
    
		/** 
		* Вывести всех пользователей приложения. 
		* 
		* @return Response 
		*/ 
    public function index()
    {
        $users = DB::table('users')->paginate(15); 
        return view('user.index', ['users' => $users]); 
        //return view ('adminpan');
    }
}