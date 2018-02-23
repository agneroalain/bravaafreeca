<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProduitsController extends Controller
{
    public function index(){
        $produits = Produit::all();
        return view('produits/index')->with('produits', $produits);
    }

    public function show($n){
        $produit = Produit::whereId($n)->first();
        return view('produits/show')->with('produit', $produit);
    }
}
