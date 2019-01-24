<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Prodotto;
use Request;

class BuyController extends Controller {

    public function buy(){
        $id = Request::input('id');
        $prodotto = Prodotto::find($id);

        return view('buy')->with('p', $prodotto);
    }

    public function buyRoute($id){
        $id = Request::input('id');
        $prodotto = Prodotto::find($id);

	    if(empty($prodotto)) {
	        return "<h1> Esse produto não existe </h1>";
	    }
	    return view('buy')->with('p', $prodotto);
    }

}