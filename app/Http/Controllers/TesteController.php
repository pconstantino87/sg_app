<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //
    public function teste(int $p1 = 0, int $p2 = 0){
        //return view('site.teste', ['p1' => $p1, 'p2' => $p2]); //ARRAY ASSOSSIATIVO
        //return view('site.teste', compact('p1', 'p2')); //COMPACT 
        return view('site.teste')->with('p1', $p1); //WITH 
    }
}
