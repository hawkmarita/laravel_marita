<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\TestController;
use DB;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
    	$rrr = DB::connection()->getPdo();
    	$test = DB::connection()->getMetod();

		//$response = DB::table('qqusers')->get();
		$server = '95.104.192.212';
		$user = 'metod';
		$password = 'metod';
		$dblink = mysqli_connect($server, $user, $password);

		//$response = DB::connection('qqmetod')->get();
        $this->assertTrue($test);
    }
}
