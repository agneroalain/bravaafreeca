@extends('layout')

@section('content')
<section>
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>{{ $produit->nom }}</h1>
                    <div class="divider"></div>
					<p>{{ $produit->description }}</p>
					
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 scrollpoint sp-effect2">
                        <div class="video-container" >
                            <img src="img/smartop.png" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

  <section >
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Caracteristiques</h1>
                    <div class="divider"></div>
                    <p>Détails techniques</p>
                </div>

	        	<div class="row">
                <div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/automate.png" alt="Service Name">
		        			<h3>Conception d'automate</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. </p>
	        			</div>
	        	</div>
	        		<div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/webapp.png" alt="Service Name">
		        			<h3>Conception de solution WEB</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. </p>
	        			</div>
	        		</div>
                    <div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/mobile.png" alt="Service Name">
		        			<h3>Conception de solution mobile</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. </p>
	        			</div>
	        		</div>
                    <div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/software.png" alt="Service Name">
		        			<h3>Conception de logiciel</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. </p>
		        		</div>
	        		</div>
	        		<div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/ruler.png" alt="Service Name">
		        			<h3>Intégrateur de solution</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. </p>
		        		</div>
	        		</div>
	        		<div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/webmark.png" alt="Service Name">
		        			<h3>Web marketing et publicité</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. </p>
		        		</div>
	        		</div>
	        		<div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/devices.png" alt="Service Name">
		        			<h3>Vente de matériel informatique</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. </p>
	        			</div>
	        		</div>
	        		<div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/electronics.png" alt="Service Name">
		        			<h3>Vente de matériel electronique</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. </p>
		        		</div>
	        		</div>


	        	</div>
	        </div>
	    </section>
@endsection