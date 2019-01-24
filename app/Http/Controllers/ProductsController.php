<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Prodotto;

class ProductsController extends Controller {

    public function lista(){
    	$prodotti = Prodotto::all();
    	
    	return view('produtos')->with('produtos', $prodotti);
    }

    public function listaJson(){
    	$prodotti = Prodotto::all();

    	return response()->json($prodotti);
    }

}