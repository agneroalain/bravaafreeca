@extends('layout')

@section('slider')
    <!--RevSlider-->
<div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption lfl fadeout hidden-xs"
                            data-x="left"
                            data-y="bottom"
                            data-hoffset="30"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="img/berry/Slides/hand-berry.png" alt="">
                        </div>

                        <div class="tp-caption lfl fadeout visible-xs"
                            data-x="left"
                            data-y="center"
                            data-hoffset="700"
                            data-voffset="0"
                            data-speed="500"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="img/berry/iphone-berry.png" alt="">
                        </div>

                        <div class="tp-caption large_white_bold sft" data-x="550" data-y="center" data-hoffset="0" data-voffset="-80" data-speed="500" data-start="1200" data-easing="Power4.easeOut">
                            Des applications
                        </div>
                        <div class="tp-caption large_white_light sfr" data-x="770" data-y="center" data-hoffset="0" data-voffset="-80" data-speed="500" data-start="1400" data-easing="Power4.easeOut">
                            
                        </div>
                        <div class="tp-caption large_white_light sfb" data-x="550" data-y="center" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1500" data-easing="Power4.easeOut">
                            Adaptées à votre activité !
                        </div>

                        <div class="tp-caption sfb hidden-xs" data-x="550" data-y="center" data-hoffset="0" data-voffset="85" data-speed="1000" data-start="1700" data-easing="Power4.easeOut">
                            <a href="#about" class="btn btn-primary inverse btn-lg">En savoir plus ...</a>
                        </div>
                        <div class="tp-caption sfr hidden-xs" data-x="730" data-y="center" data-hoffset="0" data-voffset="85" data-speed="1500" data-start="1900" data-easing="Power4.easeOut">
                            <a href="#getApp" class="btn btn-default btn-lg">Contactez nous</a>
                        </div>

                    </li>
                    <!-- SLIDE 2 -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                        <!-- MAIN IMAGE -->
                        <img src="img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption lfb fadeout hidden-xs"
                            data-x="center"
                            data-y="bottom"
                            data-hoffset="0"
                            data-voffset="0"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="img/berry/Slides/berry-slide2.png" alt="">
                        </div>


                        <div class="tp-caption large_white_light sft" data-x="center" data-y="250" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1400" data-easing="Power4.easeOut">
                            Des sites qui vous ressembles ! <i class="fa fa-heart"></i>
                        </div>


                    </li>

                    <!-- SLIDE 3 -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                        <!-- MAIN IMAGE -->
                        <img src="img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption customin customout hidden-xs"
                            data-x="right"
                            data-y="center"
                            data-hoffset="0"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-voffset="50"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="img/berry/Slides/family-berry.png" alt="">
                        </div>

                        <div class="tp-caption customin customout visible-xs"
                            data-x="center"
                            data-y="center"
                            data-hoffset="0"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-voffset="0"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Power4.easeOut">
                            <img src="img/berry/Slides/family-berry.png" alt="">
                        </div>

                        <div class="tp-caption lfb visible-xs" data-x="center" data-y="center" data-hoffset="0" data-voffset="400" data-speed="1000" data-start="1200" data-easing="Power4.easeOut">
                            <a href="#" class="btn btn-primary inverse btn-lg">En savoir plus</a>
                        </div>


                        <div class="tp-caption mediumlarge_light_white sfl hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="-50" data-speed="1000" data-start="1000" data-easing="Power4.easeOut">
                           Solutions responsives
                        </div>
                        <div class="tp-caption mediumlarge_light_white sft hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1200" data-easing="Power4.easeOut">
                           Soyez flexible.
                        </div>
                        <div class="tp-caption small_light_white sfb hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="80" data-speed="1000" data-start="1600" data-easing="Power4.easeOut">
                           <p>Nos solutions sont conçu pour s'adapter a tout péripheriique. <br> Pour vous offrir a vous et votre activité la plus grande flexibilité <br>Le lieux ou le péripherique ne seront jamais un problème.</p>
                        </div>

                        <div class="tp-caption lfl hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="160" data-speed="1000" data-start="1800" data-easing="Power4.easeOut">
                            <a href="#" class="btn btn-primary inverse btn-lg">Purchase</a>
                        </div>


                    </li>

                </ul>
            </div>
    </div>
@endsection

@section('content')
<section>
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>SmartTop</h1>
                    <div class="divider"></div>
                    <p>Ordinateur portable MADE IN AFRICA, avec connexion intégrée !</p>
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

        <!-- <section id="features">
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Fonctionalités</h1>
                    <div class="divider"></div>
                    <p>Learn more about this feature packed App</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 scrollpoint sp-effect1">
                        <div class="media media-left feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-cogs fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">User Settings</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media media-left feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-envelope fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Messages Inbox</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media media-left feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-users fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Friends List</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media media-left feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-comments fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Live Chat Messages</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media media-left feature">
                            <a class="pull-right" href="#">
                                <i class="fa fa-calendar fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Calendar / Planner</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4" >
                        <img src="img/berry/iphone-berry.png" class="img-responsive scrollpoint sp-effect5" alt="">
                    </div>
                    <div class="col-md-4 col-sm-4 scrollpoint sp-effect2">
                        <div class="media feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-map-marker fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">My Places</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-film fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Media Player™</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-compass fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Intuitive Statistics</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-picture-o fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Weather on-the-go</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                        <div class="media active feature">
                            <a class="pull-left" href="#">
                                <i class="fa fa-plus fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">And much more!</h3>
                                Lorem ipsum dolor sit amet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

  <section >
            <div class="container">
                <div class="section-heading scrollpoint sp-effect3">
                    <h1>Nos services</h1>
                    <div class="divider"></div>
                    <p>Take a closer look in more detail</p>
                </div>

	        	<div class="row">
                <div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/automate.png" alt="Service Name">
		        			<h3>Conception d'automate</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href="#">Read more...</a></p>
	        			</div>
	        	</div>
	        		<div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/webapp.png" alt="Service Name">
		        			<h3>Conception de solution WEB</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href="#">Read more...</a></p>
	        			</div>
	        		</div>
                    <div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/mobile.png" alt="Service Name">
		        			<h3>Conception de solution mobile</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href="#">Read more...</a></p>
	        			</div>
	        		</div>
                    <div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/software.png" alt="Service Name">
		        			<h3>Conception de logiciel</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href="#">Read more...</a></p>
		        		</div>
	        		</div>
	        		<div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/ruler.png" alt="Service Name">
		        			<h3>Intégrateur de solution</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href="#">Read more...</a></p>
		        		</div>
	        		</div>
	        		<div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/webmark.png" alt="Service Name">
		        			<h3>Web marketing et publicité</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href="#">Read more...</a></p>
		        		</div>
	        		</div>
	        		<div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/devices.png" alt="Service Name">
		        			<h3>Vente de matériel informatique</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href="#">Read more...</a></p>
	        			</div>
	        		</div>
	        		<div class="col-md-3 col-sm-6">
	        			<div class="service-wrapper">
		        			<img src="img/service-icon/electronics.png" alt="Service Name">
		        			<h3>Vente de matériel electronique</h3>
		        			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames. <a href="#">Read more...</a></p>
		        		</div>
	        		</div>


	        	</div>
	        </div>
	    </section>

         <section class="section">
	    	<div class="section-heading scrollpoint sp-effect3">
                    <h1>Nos parténaires</h1>
                    <div class="divider"></div>
                    <p>Il nous ont fait confiance</p>
                </div>
				<div class="clients-logo-wrapper text-center row">
					<div class="gray_scal col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/moov.png" alt="Client Name"></a></div>
					<div class="gray_scal col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/total.png" alt="Client Name"></a></div>
					<div class="gray_scal col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/voodoo.png" alt="Client Name"></a></div>
					<div class="gray_scal col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/cie.png" alt="Client Name"></a></div>
					<div class="gray_scal col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/facebook.png" alt="Client Name"></a></div>
					<div class="gray_scal col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/google.png" alt="Client Name"></a></div>
					<div class="gray_scal col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/hp.png" alt="Client Name"></a></div>
					<div class="gray_scal col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/microsoft.png" alt="Client Name"></a></div>
					<div class="gray_scal col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/mysql.png" alt="Client Name"></a></div>
					<div class="gray_scal col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/sony.png" alt="Client Name"></a></div>
					<div class="gray_scal col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/yahoo.png" alt="Client Name"></a></div>
				</div>

	    </section>
@endsection