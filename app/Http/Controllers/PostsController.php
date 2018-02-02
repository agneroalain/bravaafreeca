<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function qui_somme_nous(){
        return view('posts.qui_somme_nous');
    }
    
    public function notre_vision(){
        return view('posts.notre_vision');
    }

    public function realisations(){
        return view('posts.realisations.realisations');
    }
    


    public function produits(){

        return view('posts.produits.produits', ['produits' => $produits]);
    }
    public function smartop(){
        return view('posts.produits.smartop');
    }
    public function bravabox(){
        return view('posts.produits.bravabox');
    }


}
