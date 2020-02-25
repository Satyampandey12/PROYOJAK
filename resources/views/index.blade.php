<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PROYOJAK</title>

    <link href="{{asset('/css/landing/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/landing/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('/css/landing/main.css')}}" rel="stylesheet">
	<link href="{{asset('/css/landing/animate.css')}}" rel="stylesheet">	
	<link href="{{asset('/css/landing/responsive.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->      
 
    <link rel="shortcut icon" href="{{asset('/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
	<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
			<div class="header-top">
					<!--<div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>-->
				</div>   
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href='/'>
		                	<img class="img-responsive" src="/images/logo.png" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll active"><a href="#home">Home</a></li>
		                    <!--<li class="scroll"><a href="#explore">Explore</a></li>       --> 
		                    <li class="scroll"><a href="#about">About</a></li>                    
		                    <li class="scroll"><a href="{{ route('login') }}">Login/SignUp</a></li>
		                     <li class="scroll"><a href="#event">Gallery</a></li>                 
		                    <!--<li class="no-scroll"><a href="#twitter">Twitter</a></li>
		                    <li><a class="no-scroll" href="#" target="_blank">PURCHASE TICKETS</a></li>-->
		                    <li class="scroll"><a href="#contact">Contact</a></li>       
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
    </header>
    <!--/#header--> 

    <section id="home">	
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="/images/slider/bg1.jpg" alt="slider">						
					<div class="carousel-caption">
						<h2>register for our next event </h2>
						<h4>Click to register</h4>
						<a href='penroll' class="btn btn-info">For Performer</a>
						<a href='venroll' class="btn btn-info">For Volunteer</a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="/images/slider/bg2.jpg" alt="slider">	
					<div class="carousel-caption">
						<h2>register for our next event </h2>
						<h4>Click to register</h4>
						<a href='penroll' class="btn btn-primary">For Performer</a>
						<a href="venroll" class="btn btn-primary">For Volunteer</a>
					</div>
				</div>
				<div class="item">
					<img class="img-responsive" src="/images/slider/bg3.jpg" alt="slider">	
					<div class="carousel-caption">
						<h2>register for our next event </h2>
						<h4>Click to register</h4>
						<a href='penroll' class="btn btn-primary">For Performer</a>
						<a href="venroll" class="btn btn-primary">For Volunteer</a>
						
						<a href="#contact"></a>
					</div>
				</div>				
			</div>
		</div>    	
    </section>
	<!--/#home-->

	<!--<section id="explore">
		<div class="container">
			<div class="row">
				<div class="watch">
					<img class="img-responsive" src="/images/watch.png" alt="">
				</div>				
				<div class="col-md-4 col-md-offset-2 col-sm-5">
					<h2>our next event in</h2>
				</div>				
				<div class="col-sm-7 col-md-6">					
					<ul id="countdown">
						<li>					
							<span class="days time-font">00</span>
							<p>days </p>
						</li>
						<li>
							<span class="hours time-font">00</span>
							<p class="">hours </p>
						</li>
						<li>
							<span class="minutes time-font">00</span>
							<p class="">minutes</p>
						</li>
						<li>
							<span class="seconds time-font">00</span>
							<p class="">seconds</p>
						</li>				
					</ul>
				</div>
			</div>
			<div class="cart">
				<a href="#"><i class="fa fa-shopping-cart"></i> <span>Purchase Tickets</span></a>
			</div>
		</div>
	</section>/#explore-->

	<section id="about">
		<div class="guitar2">				
			<img class="img-responsive" src="/images/guitar2.jpg" alt="guitar">
		</div>
		<div class="about-content">					
					<h2>About Evento</h2>
					<p>PROYOJAK is a fully automated system which is capable of maintaining tasks, organizing events and making event process easier in any University or College. Through PROYOJAK we provide a workflow structure that can be applied to our University to allocate the task to its team and check status of each member of that team in organized manner with added functionality of granting permissions.</p>
					<a href="#" class="btn btn-primary">View<!--<i class="fa fa-angle-right"></i>--></a>
				
		</div>
	</section><!--/#about-->


	<section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-9">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<h2 class="heading">PHOTO GALLERY</h2>
						<a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="/images/event/event1.jpg" alt="event-image">
											<h4>NAME TAG </h4>
											<h5>EVENT</h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="/images/event/event2.jpg" alt="event-image">
											<h4</h4>
											<h5></h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="/images/event/event3.jpg" alt="event-image">
											<h4></h4>
											<h5></h5>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="/images/event/event1.jpg" alt="event-image">
											<h4>Chester Bennington</h4>
											<h5>Vocal</h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="/images/event/event2.jpg" alt="event-image">
											<h4>Mike Shinoda</h4>
											<h5>vocals, rhythm guitar</h5>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="single-event">
											<img class="img-responsive" src="/images/event/event3.jpg" alt="event-image">
											<h4>Rob Bourdon</h4>
											<h5>drums</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="guitar">
					<img class="img-responsive" src="/images/guitar.png" alt="guitar">
				</div>
			</div>			
		</div>
	</section><!--/#event-->
	
	<!--<section id="twitter">
		<div id="twitter-feed" class="carousel slide" data-interval="false">
			<div class="twit">
				<img class="img-responsive" src="/images/twit.png" alt="twit">
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="text-center carousel-inner center-block">
						<div class="item active">
							<img src="/images/twitter/twitter1.png" alt="">
							<p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
						<div class="item">
							<img src="/images/twitter/twitter2.png" alt="">
							<p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
						<div class="item">
							<img src="/images/twitter/twitter3.png" alt="">
							<p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
							<a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
						</div>
					</div>
					<a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</div>		
	</section>/#twitter-feed-->
	
	<!--<section id="sponsor">
		<div id="sponsor-carousel" class="carousel slide" data-interval="false">
			<div class="container">
				<div class="row">
					<div class="col-sm-10">
						<h2>Sponsors</h2>			
						<a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<ul>
									<li><a href="#"><img class="img-responsive" src="/images/sponsor/sponsor1.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="/images/sponsor/sponsor2.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="/images/sponsor/sponsor3.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="/images/sponsor/sponsor4.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="/images/sponsor/sponsor5.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="/images/sponsor/sponsor6.png" alt=""></a></li>
								</ul>
							</div>
							<div class="item">
								<ul>
									<li><a href="#"><img class="img-responsive" src="/images/sponsor/sponsor6.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="/images/sponsor/sponsor5.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="/images/sponsor/sponsor4.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="/images/sponsor/sponsor3.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="/images/sponsor/sponsor2.png" alt=""></a></li>
									<li><a href="#"><img class="img-responsive" src="/images/sponsor/sponsor1.png" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="light">
				<img class="img-responsive" src="/images/light.png" alt="">
			</div>
		</div>
	</section><!/#sponsor-->

	<section id="contact">
		<!--<div id="map">
			<div id="gmap-wrap">
	 			<div id="gmap"> 				
	 			</div>	 			
	    	</div>
		</div>/#map-->
		<div class="contact-section">
			<div class="ear-piece">
				<img class="img-responsive" src="/images/ear-piece.png" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="contact-text">
							<h3>Contact</h3>
							<address>
								E-mail: ccsit@gmail.com<br>
								Phone: +919999998800<br>
								
							</address>
							<address>
								E-mail: ccsit@gmail.com<br>
								Phone: +918888889900<br>
								
							</address>
						</div>
						<!--<div class="contact-address">
							<h3>Contact</h3>
							<address>
								Unit C2, St.Vincent's Trading Est.,<br>
								Feeder Road,<br>
								Bristol, BS2 0UY<br>
								United Kingdom
							</address>
						</div>-->
					</div>
					<div class="col-sm-5">
						<div id="contact-section">
							<h3>Send a message</h3>
					    	<div class="status alert alert-success" style="display: none"></div>
					    	<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="#">
					            <div class="form-group">
					                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
					            </div>
					            <div class="form-group">
					                <input type="email" name="email" class="form-control" required="required" placeholder="Email ID">
					            </div>
					            <div class="form-group">
					                <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Enter your message"></textarea>
					            </div>                        
					            <div class="form-group">
					                <button type="submit" class="btn btn-primary pull-right">Send</button>
					            </div>
					        </form>	       
					    </div>
					</div>
				</div>
			</div>
		</div>		
	</section>
    <!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2018 :: PROYOJAK. All Rights Reserved. <br> Designed by CCSIT</p>                
            </div>
        </div>
    </footer>
    <!--/#footer
    {{asset('js/bootstrap.js')}}
-->
  
    <script type="text/javascript" src="{{asset('/js/landing/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/landing/bootstrap.min.js')}}"></script>
	<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
  	<!--<script type="text/javascript" src="{{asset('/js/landing/gmaps.js')}}"></script>-->
	<script type="text/javascript" src="{{asset('/js/landing/smoothscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/landing/jquery.parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/landing/coundown-timer.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/landing/jquery.scrollTo.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/landing/jquery.nav.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/landing/main.js')}}"></script>  
</body>
</html>