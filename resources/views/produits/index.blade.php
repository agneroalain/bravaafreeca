@extends('layout')

@section('content')
    <section>
        <!-- DEBUT container -->
        <div class="container">
            <!-- DEBUT section-heading -->
            <div class="section-heading scrollpoint sp-effect3">
                    <h1>Nos Produits</h1>
                    <div class="divider"></div>
                    <p>Découvrez ce que nous avons à vous proposer!</p>
            </div>
            <!-- FIN section-heading -->        
            <!-- DEBUT row -->
            <div class="row">
                <i class='fa fa-search fa-2x'></i>
                <div class="col-md-8 col-md-offset-2 scrollpoint sp-effect2">
                    <input class="search" type="text" placeholder="rechercher ici"/>
                </div>
            </div>
            <!-- FIN row -->

            <!-- DEBUT row produits -->
            <div class="row">
                @foreach( $produits as $produit)
                    <div class="carte_produit">
                        <div class="pic_produit">

                        </div>
                        <div class="desc_produit">
                            <h3>{{ $produit->nom }}</h3>
                            {{ $produit->description }}
                        </div>
                        <a href=""></a><button>En savoir plus ...</button></a>
                    </div>
                @endforeach
            </div>
            <!-- FIN row produits -->
        </div>
        <!-- FIN conteneur --> 
    </section>
@endsection