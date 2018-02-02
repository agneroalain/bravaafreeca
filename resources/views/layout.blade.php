<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Bravaafreeca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="/css/bootstrap.css">
    
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/js/rs-plugin/css/settings.css">

    <link rel="stylesheet" href="/css/main.css">


    <script type="text/javascript" src="/js/modernizr.custom.32033.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="pre-loader">
    <div class="load-con">
        <img src="img/berry/logo.png" class="animated fadeInDown" alt="">
        <div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
        </div>
    </div>
</div>
    <header>

            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="fa fa-bars fa-lg"></span>
                            </button>
                            <a class="navbar-brand" href="index.html">
                                <img src="img/berry/logo.png" alt="" class="logo">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Accueil</a>
                                </li>
                                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Brava Afreeca <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-default dropdown-menu">
                                        <li><a href="qui_somme_nous">Qui somme nous</a></li>
                                        <li><a href="notre_vision">Notre vision</a></li>
                                        <li><a href="#">Notre équipe</a></li>
                                        <!-- <li><a href="#">Nos partenaires</a></li> -->
                                    </ul>
                                </li>
                                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">Produits <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-default dropdown-menu">
                                        <li><a href="/produits">Tous</a></li>
                                        <hr>
                                        <li><a href="/produits/smartop">SmartTop</a></li>
                                        <li><a href="/produits/bravabox">Brava Box</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-default dropdown-menu">
                                        <li><a href="services/">Tous</a></li>
                                        <hr>
                                        <li><a href="services/archive_expert">Archivage</a></li>
                                        <li><a href="services/automatisation">Automatisation</a></li>
                                        <li><a href="services/logiciel">Solutions Logiciels</a></li>
                                    </ul>
                                </li>
                                <li>
                                <a href="/realisations">Nos realisations</a>
                                
                                </li>

                                
                                <!-- <li><a href="#">Nous contacter</a></li>
                                <li class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </li> -->

                            </ul>
                        </div>

                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-->

            </nav>
            <br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
          
            </header>
<div class="wrapper">


        
        @yield('slider')
       @yield('content')





</div>
        <div class="footer">
	    	<div class="container">
		    	<div class="row">

                	<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Brava Afreeca</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="#">A propos de nous</a></li>
                            <li><a href="#">Notre vision</a></li>
		    				<li><a href="#">Notre équipe</a></li>
		    				<li><a href="#">Nos parténaires</a></li>
		    				<li>
                                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
                                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-youtube fa-lg"></i></a>

                            </li>


		    			</ul>
		    		</div>
                    <div class="col-footer col-md-2 col-xs-6">
		    			<h3>Produits</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="#">SmartTop</a></li>
		    				<li><a href="#">Bravabox</a></li>
		    				<li><a href="#">Assistance</a></li>
		    				<li><a href="#">Faqs</a></li>
		    				<li><a href="#">Forum</a></li>
		    				<li><a href="#">Pilote & logiciels</a></li>
		    			</ul>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Services</h3>
                        <ul class="no-list-style footer-navigate-section">
		    				<li><a href="#">Conception web mobil</a></li>
		    				<li><a href="#">intégrateur de solution</a></li>
		    				<li><a href="#">Conception d'automate</a></li>
		    				<li><a href="#">Web marketing et communication</a></li>
		    				<li><a href="#">Vente de matériel informatiques</a></li>

		    			</ul>
		    		</div>

		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contacts</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b>ABIDJAN Riviera Palmeraie, Lot 2422, Ilot 140, 10 BP 2033 Abidjan 10.<br/>
	        				<b>Phone:</b> +225 22 49 97 20<br/>
	        				<b>Fax:</b> +44 123 654321<br/>
	        				<b>Email:</b> <a href="mailto:info@bravaafreeca.ci">info@bravaafreeca.ci</a>
	        			</p>
		    		</div>

		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2016 Bravaafreeca. Tout droit reservé.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>


        <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/placeholdem.min.js"></script>
    <script src="/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            appMaster.preLoader();
        });
    </script>
    <script src="/js/project_view.js"></script>
</body>