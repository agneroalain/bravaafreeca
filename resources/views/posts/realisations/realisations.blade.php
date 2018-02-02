@extends('layout')

@section('content')
<section>
    <!-- DEBUT container -->
    <div class="container">
        <!-- DEBUT section-heading -->
        <div class="section-heading scrollpoint sp-effect3">
                <h1>Nos réalisations</h1>
                <div class="divider"></div>
                <p>Une idée ? Nous la materialisons !</p>
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
        <!-- DEBUT carte -->
        <div class="col-md-3 col-sm-6">
            <div class="service-wrapper real_box" onclick="toggle_project('SABICASH')">
                <img src="img/service-icon/mobile.png" alt="Service Name">
                <h3>SABICASH</h3>
                <p>Une solution WEB et Mobile permettant aux acteurs de la microfinance de gérer leur activité d’épargne de fonds, et de la gestion de la petite monnaie. </p>
            </div>
        </div>
        <!-- FIN carte -->
        <!-- DEBUT row page -->        
        <div>
            <div class="project_page SABICASH">
                <div class="closer" onclick="toggle_project('SABICASH')">
                    <i class="fa fa-times fa-2x"></i>
                </div>
                <div class="row">
                    <h1>WEB : Développement Web.</h1>
                </div>
                <div class="row">
                    <p class="desc_project">
                    Une solution WEB servant de site vitrine et annuaires pour le CNOA
                    </p>
                </div>
                <div class="row">
                    <h3>Technologies</h3>
                    <ul>
                        <li>Tech 1</li>
                        <li>Tech 1</li>
                        <li>Tech 1</li>
                        <li>Tech 1</li>
                    </ul>
                </div>
                <div class="row">
                    Client : this client / date : this date
                </div>
            </div>
            <div id="coverSABICASH" class="cover" onclick="toggle_project('SABICASH')"></div>
        </div>
        <!-- FIN row page -->        
        


            <!-- SECOND PROJECT -->

        <div class="col-md-3 col-sm-6">
            <div class="service-wrapper real_box" onclick="toggle_project('Web')">
                <img src="img/service-icon/mobile.png" alt="Service Name">
                <h3>Ecole d’Architecture d’Abidjan</h3>
                <p>Étude, développement, déploiement et maintenance solution de Smart Study (domotique) </p>
            </div>
        </div>        
        <div>
            <div class="project_page project Web">
                <div class="closer" onclick="toggle_project('Web')"><i class="fa fa-times fa-2x"></i></div>
                <div class="row">
                    <h1>système distibrué de E-learning</h1>
                </div>
                <div class="row">
                    <p class="desc_project">
                    Étude, développement, déploiement et maintenance solution de Smart Study (domotique)
                    </p>
                </div>
                <div class="row">
                    <h3>Technologies</h3>
                    <ul>
                        <li>Tech 1</li>
                        <li>Tech 1</li>
                        <li>Tech 1</li>
                        <li>Tech 1</li>
                    </ul>
                </div>
                <div class="row">
                    Client : this client / date : this date
                </div>
            </div>
            <div id="coverWeb" class="cover" onclick="toggle_project('Web')"></div>
        </div>        
    </div>
    <!-- FIN container -->          
</section>
@endsection