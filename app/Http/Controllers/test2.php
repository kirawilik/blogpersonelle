<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test2 extends Controller
{
    public function index(Request $request){
        $nom =$request->nom;
        $language=['react','php'];
        return view ('test',compact('nom','language'));
    }
}
