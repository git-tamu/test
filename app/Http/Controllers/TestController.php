<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $drinkModel;

    public function __construct()
    {
        $this->drinkModel = new Drink();
    }

    public function index(){

	    $name = '田村';
	    $array = ['apple', 'banana', 'orange'];
	    $drinks = $this->drinkModel->getAll();
	    $drink = $this->drinkModel->get(1);

		return view('test')->with([
		    'name' => $name,
            'hairetu' => $array,
            'drinks' => $drinks,
            'drink' => $drink->drink_name,
        ]);
	}

	public function post(Request $request){
        $post_date = $request->get('drink');
        return view('test2')->with([
            'drink' => $post_date
        ]);
    }
}
