<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function index(){
        return view('produits/index');
    }

    public function show($n){
        return view('produits/show')->with('numero', $n);
    }
}
