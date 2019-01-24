<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Prodotto;

class IndexController extends Controller {

    public function main(){
        $prodotti = Prodotto::all();
        
        return view('index')->with('produtos', $prodotti);
    }

    public function instagram(){
        return view('instagram');
    }

    public function instagram2(){
        return view('instagram2');
    }

}