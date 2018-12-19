<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function request($input_test, $example)
	{
		if(empty($example)){
			return 'error';
		}
		if(empty($input_test)){
			return 'error';
		}
		
		$result = str_replace($example, '', $input_test);
		
		if(empty(trim($result))){
			return 'The string is empty';
		}
		
		return 'The new string ' . $result;
	}
}
