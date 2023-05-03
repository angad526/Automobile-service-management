<?php
 include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Automobile</title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"> 
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico"> 
    
        
</head> 

<body id="home">

    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand p-0" href="index.php"><img src="https://img.freepik.com/free-vector/car-service-logo-design_23-2149750702.jpg" width="60px"  alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li> 
                        <li class="scroll"><a href="#services">Services</a></li>
                        <li class="scroll"><a href="#about">About Us</a></li>
						<li class="scroll"><a href="#pricing">Our Pricing</a></li>
                        <li class="scroll"><a href="login.php">Login</a></li>
                        <li class="scroll"><a href="sing_up.php">Sign up</a></li>
						<li class="scroll"><a href="service_history.php"> Service History</a></li>
						<li class="scroll"><a href="#contact-us">Contact</a></li>
                        <?php
                        
                        session_start();
                        if($_SESSION==NULL){

                            echo "<li class='scroll'><a  style='color: white;'>Login/SignUp</a></li>";
                            
                            
                        }
                        else{

                            echo "<li class='scroll'><a  style='color: white;'>Hi ".$_SESSION['first_name']."</a></li>";
                        }
                        

                        ?>

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(https://www.autoresponse.com.au/themes/demo/assets/images/banner1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content " style="background:transparent;">
                                    <h2>Make Your <span>Car</span> Shine</h2> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(https://www.autoleaders.com.au/wp-content/uploads/2019/08/carservicing.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content" style="background:transparent;">
                                    <h2>Get Our <span>Amazing</span> Service</h2> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="hero-text" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h1>Make your Car Shine with Our Service </h1>
                    <h2><p>India's Number One Car Service Workshop</p></h2>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="#portfolio">Gallery</a>
                </div>
            </div>
        </div>
    </section><!--/#hero-text-->

      <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Services</h2>
                <p class="text-center wow fadeInDown"> </p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Car Checkup</h4>
                                <p>This inspection checks for emission, machine based headlamp test.</p>
								
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-compass"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Car Wash</h4>
                                <p>Washing your make your car look better.</p>
								
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bell"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Car Repair</h4>
                                <p>We make car engine and Interior and other service.</p>
								
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-cube"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Car Paint</h4>
                                <p>Repair dent and Scrach.We make special looks for car as per customer.</p>
								
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-yelp"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Car Decor</h4>
                                <p>Adding extra accessories to make car more gorgeous.</p>

                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-life-ring"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Car Polish</h4>
                                <p>we do car screamics polishing and other polishing.</p>
								
                            </div>
							
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->
			<div><center><a href="enquire.php" class="btn btn-primary">Enquire</a></center></div>
        </div><!--/.container-->
		
    </section><!--/#services-->
   

 <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">About Us</h2>
                <p class="text-center wow fadeInDown"></p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                  <img class="img-responsive" src="images/aboutus.jpg" alt="">
                </div>

                <div class="col-sm-6 wow fadeInRight"> 
                    <p>Automobiles need maintenance from time to time. Like
						humans are required to maintain hygiene, similarly
						automobiles also need to be kept clean. Automobiles
						have to run on dirty roads and in a polluted environment.
						They run on uneven roads with potholes and other
						obstructions, and are therefore subjected to loads which
						damage them. Therefore, there is a need for regular
						maintenance and servicing of automobiles, which is
						usually done in auto workshops or auto service stations.
						In this Unit, you will understand the concept of
						vehicle maintenance and servicing.</p>

					<p>As you may be aware, there is an increase in the number
					of vehicles, such as motorcycle, scooter, bus, car, jeep,
					tempo, truck, tanker, etc., running in the cities.
					Every new vehicle comes with a vehicle maintenance
					manual. The owner of the vehicle is expected to read and
					use this manual, as it mentions vehicle maintenance 
					</p>

					<p>tips during driving. It has been noticed that after getting
					a car or vehicle, the owners do not care much about a
					regular car or vehicle maintenance.
					Even if the owners regularly service their vehicle,
					the vehicle maintenance tips given in the vehicle
					maintenance manual increases the longevity or life of
					the vehicle to a great extent.
					</p>
 

                </div>
            </div>
        </div>
    </section><!--/#about-->


<section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Pricing</h2>
                <p class="text-center wow fadeInDown"></p>
            </div>

            <div class="row"> 
			<div class="col-md-4 menuItem">     
                            <ul class="menu">
                                <li>
                                    Car Wash <span class="price">₹500</span>
                                    <div class="detail"> </div>
                                </li>
                                <li>
                                    Car Repair  <span class="price">₹1000</span>
                                    <div class="detail"> </div>
                                </li>
                                <li>
                                    Car Checkup  <span class="price">₹900</span>
                                    <div class="detail"></div>
                                </li>
                                <li>
                                    Wheel Alignment  <span class="price">₹800</span>
                                    <div class="detail"></div>
                                </li>
                                <li>
                                    Tyer Change  <span class="price">₹700</span>
                                    <div class="detail"></div>
                                </li>
                            </ul>
                        </div>
						<div class="col-md-4 menuItem">     
                            <ul class="menu">
                                <li>
                                    Car Painting  <span class="price">₹1000</span>
                                    <div class="detail"></div>
                                </li>
                                <li>
                                   Music System  <span class="price">₹900</span>
                                    <div class="detail"></div>
                                </li>
                                <li>
                                    Car Interior  <span class="price">₹800</span>
                                    <div class="detail"> </div>
                                </li>
                                <li>
                                    Car Exterior  <span class="price">₹600</span>
                                    <div class="detail"></div>
                                </li>
                                <li>
                                    Car Modification  <span class="price">₹500</span>
                                    <div class="detail"> </div>
                                </li>
                            </ul>
                        </div>
						<div class="col-md-4 menuItem">  
                            <ul class="menu">
                                <li>
                                    Car Polishing  <span class="price">₹600</span>
                                    <div class="detail"></div>
                                </li>
                                <li>
                                    Scrach Remove  <span class="price">₹700</span>
                                    <div class="detail"> </div>
                                </li>
                                <li>
                                    Denting  <span class="price">₹500</span>
                                    <div class="detail"></div>
                                </li>
                                <li>
                                    Provision Store  <span class="price">₹600</span>
                                    <div class="detail"></div>
                                </li>
                                <li>
                                    Car Salon  <span class="price">₹700</span>
                                    <div class="detail"></div>
                                </li>
                            </ul>
                        </div>
			</div>
        </div>
    </section><!--/#pricing-->



    
  

 

  <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Gallery</h2> 
                <p class="text-center wow fadeInDown">Our Gallery gives you special service and show case of our workshops</p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">Show All</a></li>
 
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item designing">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/1.jpg" alt="">
                        <div class="portfolio-info">
                            
                            <a class="preview" href="images/portfolio/1.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/2.jpg" alt="">
                        <div class="portfolio-info">
                            
                            <a class="preview" href="images/portfolio/2.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item designing">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/3.jpg" alt="">
                        <div class="portfolio-info">
                            
                            <a class="preview" href="images/portfolio/3.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/4.jpg" alt="">
                        <div class="portfolio-info">
                            
                            <a class="preview" href="images/portfolio/4.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/6.jpg" alt="">
                        <div class="portfolio-info">
                            
                            <a class="preview" href="images/portfolio/6.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item designing development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/7.jpg" alt="">
                        <div class="portfolio-info">
                            
                            <a class="preview" href="images/portfolio/7.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/8.jpg" alt="">
                        <div class="portfolio-info">
                            
                            <a class="preview" href="images/portfolio/8.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

    
    

    
    <section id="contact-us">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Location</h2>
                <p class="text-center wow fadeInDown"></p>
            </div>
        </div>
    </section>/#contact-us


    <section id="contact">
        
        <div class="container-wrapper">
            <div class="container contact-info">
                <div class="row">
				  <div class="col-sm-4 col-md-4">
                        <div class="contact-form"> 
                            <address>
                              <strong>AUTOCARE</strong><br>
                              INDIA MAHARASHTRA <br>
                                      THANE-401105<br>
                              <abbr title="Phone">Phone number:</abbr> +91 9152714334 <br> +91 9137837826
                            </address>
					</div></div>
                    <div class="col-sm-8 col-md-8">                      
						<div class="contact-form">											
						  
		<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
		<form name="sentMessage" id="contactForm"  novalidate> 
		<div class="control-group">
		<div class="controls">
		<input type="text" class="form-control" 
		placeholder="Full Name" id="name" required
		data-validation-required-message="Please enter your name" />
		<p class="help-block"></p>
		</div>
		</div> 	
		<div class="control-group">
		<div class="controls">
		<input type="email" class="form-control" placeholder="Email" 
		id="email" required
		data-validation-required-message="Please enter your email" />
		</div>
		</div> 	

		<div class="control-group">
		<div class="controls">
		<textarea rows="10" cols="100" class="form-control" 
		placeholder="Message" id="message" required
		data-validation-required-message="Please enter your message" minlength="5" 
		data-validation-minlength-message="Min 5 characters" 
		maxlength="999" style="resize:none"></textarea>
		</div>
		</div> 		 
		<div id="success"> </div> <!-- For success/fail messages -->
		<button type="submit" class="btn btn-primary pull-right">Send</button><br />
		</form>

							 					
						</div>
                    </div>
                </div>
            </div>
        </div>
<div id="google-map" style="height:400px" data-latitude="19.3021884" data-longitude="72.8633633"></div>   


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="contact/jqBootstrapValidation.js"></script>
    <script src="contact/contact_me.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/custom-scripts.js"></script>

</body>
</html>