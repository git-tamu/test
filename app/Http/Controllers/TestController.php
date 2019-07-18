<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function index(){

	    $name = '田村';
	    $array = ['apple', 'banana', 'orange'];

		return view('test')->with([
		    'name' => $name,
            'hairetu' => $array,
        ]);
	}

	public function post(Request $request){
        $post_date = $request->get('drink');
        return view('test2')->with([
            'drink' => $post_date
        ]);
    }
}
