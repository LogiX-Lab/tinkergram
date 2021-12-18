<!--Template Name:citreat
File Name:home.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->
<!DOCTYPE html>
<html>
    <head>
        <title>Food Fusion</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="images/favicon.png" rel="icon"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/scrolling-nav.css" rel="stylesheet">
        <link rel="stylesheet" href="css/owl.theme.default.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <script src= "js/jquery.min.js" type= "text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/owl.carousel.js" type="text/javascript"></script>
        <script src="js/magnific-popup.js" type="text/javascript"></script>
        <script src="js/shuffle.min.js"></script>
        <script src="js/shuffle.custom.js"></script>
        <script src="js/counterup.min.js" type="text/javascript"></script>
        <script src="js/waypoints.min.js" type="text/javascript"></script>
        <script src="js/scrolling-nav.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </head>

    <body id="home">

        <!--Header Section-->
        <header>
            <nav class="navbar navbar-default navbar-fixed-top tv-navbar-custom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="navbar-header text-center">
                                <a href="home.html" class="navbar-brand tv-citreat-logo">Food Fusion</a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tv-navbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="collapse navbar-collapse" id="tv-navbar">
                                <ul class="nav navbar-nav text-center tv-small-bg tv-active-menu">
                                    <li class="tv-drop-menu">
                                        <a data-toggle="dropdown" aria-expanded="false" class="tv-menu">Pages<i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu tv-sub-menu">
                                            <li class="dropdown-submenu Navigation-listItem is-dropdown">
                                                <a href="aboutus.html">About Us</a>
                                                <a href="ourteam.html">Chef Team</a>
                                                <a href="promotions.html">Promotions</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="tv-drop-menu">
                                        <a data-toggle="dropdown" aria-expanded="false" class="tv-menu">Services<i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu tv-sub-menu">
                                            <li class="dropdown-submenu Navigation-listItem is-dropdown ">
                                                <a href="services.html">All Services</a>
                                                <a href="gallery.html">Gallery</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="menucard.html" class="tv-menu">Menu Card</a></li>
                                    <li class=""><a href="contactus.html" class="tv-menu">Contact Us</a></li>
                                    <li class=""><a href="shortcodes.html" class="tv-menu">ShortCodes</a></li>
                                    <li class="tv-drop-menu">
                                        <a data-toggle="dropdown" aria-expanded="false" class="tv-menu">My FOOD<i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu tv-sub-menu">
                                            <li class="dropdown-submenu Navigation-listItem is-dropdown ">
                                                <a href="{{ route('login') }}">Login</a>
                                                <a href="{{ route('register') }}">Register</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!--Banner Section-->
            <div class="tv-banner-image" style="background: rgba(0, 0, 0, 0) url('images/Image1.png') no-repeat scroll center top / cover;">
                <div class="tv-opacity-medium tv-bg-black"></div>
                <div class="tv-banner-title">
                    <h2>Perfectly Balanced</h2>
                    <h1>Quality & Taste</h1>
                    <div class="tv-contact-details">
                        <div class="tv-header-call">
                            <img src="images/telephone.png">
                            <h3>Call Us</h3>
                            <p>+8125852000</p>
                        </div>
                        <div class="tv-header-location">
                            <img src="images/location.png">
                            <h3>Location</h3>
                            <p>8800 Orchid Rd, Singapore</p>
                        </div>
                        <div class="tv-header-email">
                            <img src="images/envelope(1).png">
                            <h3>Email</h3>
                            <p>web@foodfusion.sg</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Banner Section-->
        </header>
        <!--End Header Section-->

        <!--Well Section-->
        <section class="tv-section-padding" id="well">
            <div class="tv-fixed-img tv-section-padding-70" style="background-image:url('images/Image2.png')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-6 col-md-6 col-sm-offset-7 col-sm-5 col-xs-12">
                            <div class="tv-well-block">
                                <h3>Welcome Eating Well</h3>
                                <p>Donec placerat enim ut urna ornare, eget egestas arcu sagittis. Duis suscipit suscipit elit et egestas. Etiam in fermentum enim, sit amet fringilla velit. Nam molestie justo nibh, sed aliquam felis pulvinar eget. In semper sit amet ipsum vitae mollis. Nunc orci libero, finibus sit amet ligula nec, commodo imperdiet lectus. Duis pharetra volutpat nisi non lobortis. Maecenas malesuada leo ligula, malesuada venenatis est dapibus a. Nunc eu finibus lectus, vel vehicula odio.</p>
                                <div class="tv-citreat-button">
                                    <a href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Well Section-->

        <!--Services Section-->
        <section class="tv-section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 padding-0 col-sm-6 col-xs-12">
                        <div class="tv-service-img">
                            <img src="images/Image3.png" class="width-100 img-responsive" alt="serviceicon">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-service-title">
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                            <h3>Our Best Services</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="tv-service-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="images/serviceicon1.png" class="media-object" alt="serviceicon">
                                        </div>
                                        <div class="media-body">
                                            <h4>Fast Delivered</h4>
                                            <hr class="hr-service">
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="tv-service-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="images/serviceicon2.png" class="media-object" alt="serviceicon">
                                        </div>
                                        <div class="media-body">
                                            <h4>Best Quality</h4>
                                            <hr class="hr-service">
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="tv-service-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="images/serviceicon3.png" class="media-object" alt="serviceicon">
                                        </div>
                                        <div class="media-body">
                                            <h4>Ingredient Supply</h4>
                                            <hr class="hr-service">
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="tv-service-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="images/serviceicon5.png" class="media-object" alt="serviceicon">
                                        </div>
                                        <div class="media-body">
                                            <h4>Online Booking</h4>
                                            <hr class="hr-service">
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="tv-service-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="images/event.png" class="media-object" alt="serviceicon">
                                        </div>
                                        <div class="media-body">
                                            <h4>Event Booking</h4>
                                            <hr class="hr-service">
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="tv-service-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="images/serviceicon4.png" class="media-object" alt="serviceicon">
                                        </div>
                                        <div class="media-body">
                                            <h4>Freshly Made</h4>
                                            <hr class="hr-service">
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Services Section-->

        <!--Menu Card Section-->
        <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-citreat-title">
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                        <h3>Our Best Menu</h3>
                    </div>
                    <div class="tv-menu-clear">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="tv-home-menu-title">
                                <h4>Starters</h4>
                                <p>Something to start with</p>
                                <hr class="hr-service">
                            </div>
                            <div class="tv-home-menu">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/Image13.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4>Tasty Sandwiches</h4>
                                        <span>$6.19</span>
                                        <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tv-home-menu">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/Image14.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4>Gourmet Oysters</h4>
                                        <span>$8.99</span>
                                        <p>With ham, eggs, cheese and arugula for perfect start of the dinner!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="tv-home-menu-title">
                                <h4>Main dishes</h4>
                                <p>For hungry men</p>
                                <hr class="hr-service">
                            </div>
                            <div class="tv-home-menu">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/Image15.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4>Sirloin Steak</h4>
                                        <span>$19.99</span>
                                        <p>With rosemary and cherry tomatoes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tv-home-menu">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/Image16.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4>Thai Noodles</h4>
                                        <span>$4.99</span>
                                        <p>With chicken or vegetables.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="tv-home-menu-title">
                                <h4>Soups</h4>
                                <p>Warm and full of taste</p>
                                <hr class="hr-service">
                            </div>
                            <div class="tv-home-menu">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/Image17.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4>Angel Soup</h4>
                                        <span>$3.69</span>
                                        <p>From different vegetables.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tv-home-menu">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/Image18.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4>Yellow Soup</h4>
                                        <span>$3.89</span>
                                        <p>Traditional soup from India.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="tv-home-menu-title">
                                <h4>Desserts</h4>
                                <p>Something sweet for the end, right?</p>
                                <hr class="hr-service">
                            </div>
                            <div class="tv-home-menu">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/Image19.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4>Walnuts Cake</h4>
                                        <span>$36.99</span>
                                        <p>One amazing cake for you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tv-home-menu">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/Image20.jpg" class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <h4>Cheese Cake</h4>
                                        <span>$8.49</span>
                                        <p>This is our home-made super delicious cheese cake</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Menu Card Section-->

        <!--Works Section-->
        <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="tv-citreat-title">
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                            <h3>How It Works</h3>
                        </div>
                        <div class="row">
                            <div class="tv-work-block-clear">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="tv-work-block">
                                        <img src="images/menuicon.png" alt="workicon" />
                                        <h4>You Explore The Menu</h4>
                                        <p>Pellentesque condimentum vitae odio ut euismod. Vestibulum at iaculis arcu. Aenean in condimentum dui.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="tv-work-block">
                                        <img src="images/serviceicon3.png" alt="workicon" />
                                        <h4>We Make Your Meal</h4>
                                        <p>Pellentesque condimentum vitae odio ut euismod. Vestibulum at iaculis arcu. Aenean in condimentum dui.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="tv-work-block">
                                        <img src="images/serviceicon1.png" alt="workicon" />
                                        <h4>We Deliver</h4>
                                        <p>Pellentesque condimentum vitae odio ut euismod. Vestibulum at iaculis arcu. Aenean in condimentum dui.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="tv-work-img">
                            <img src="images/Image5.png" class="width-100 img-responsive" alt="worksimg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Works Section-->

        <!--Reservation-->
        <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-citreat-title">
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                        <h3>Reservation Now</h3>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-reservation-img">
                            <img src="images/Image21.jpg" class="width-100 img-responsive" alt="reservationimg" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-reservation-content">
                            <form>
                                <div class="row">
                                    <div class="tv-reservation-form-clear">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Name</label>
                                                <input class="input-field tv-reservation-input" placeholder="First Name *" name="name" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Time</label>
                                                <input class="input-field tv-reservation-input" placeholder="Time *" name="name" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Telephone</label>
                                                <input class="input-field tv-reservation-input" placeholder="Telephone *" name="phone" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Email</label>
                                                <input class="input-field tv-reservation-input" placeholder="Email *" name="email" required="" type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Supoortive Message</label>
                                                <textarea class="tv-reservation-textarea" placeholder="Supportive message" name="message" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="tv-citreat-button text-center">
                                                <button type="submit" class="tv-submit-button reservation-button">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Reservation-->

        <!--Testimonial Section-->
        <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-citreat-title">
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                        <h3>Testimonial</h3>
                    </div>
                    <div id="owl-example" class="owl-carousel owl-theme">
                        <div class="tv-testimonial-block">
                            <div class="tv-testimonial-img">
                                <img src="images/comment1.jpg" class="img-circle img-responsive" alt="testiimg" style="width:80px;">
                            </div>
                            <div class="tv-testimonial-content">
                                <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer vestibulum, sem et bibendum fringilla, orci lorem tempor sem, luctus tincidunt est arcu eu arcu. Nam arcu nulla, dignissim id tempor eget, sollicitudin vel metus. </p>
                                <h4>David Miller</h4>
                                <h5>Happy Client</h5>
                            </div>
                        </div>
                        <div class="tv-testimonial-block">
                            <div class="tv-testimonial-img">
                                <img src="images/comment2.jpg" class="img-circle img-responsive" alt="testiimg" style="width:80px;">
                            </div>
                            <div class="tv-testimonial-content">
                                <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer vestibulum, sem et bibendum fringilla, orci lorem tempor sem, luctus tincidunt est arcu eu arcu. Nam arcu nulla, dignissim id tempor eget, sollicitudin vel metus. </p>
                                <h4>David Miller</h4>
                                <h5>Happy Client</h5>
                            </div>
                        </div>
                        <div class="tv-testimonial-block">
                            <div class="tv-testimonial-img">
                                <img src="images/comment3.jpg" class="img-circle img-responsive" alt="testiimg" style="width:80px;">
                            </div>
                            <div class="tv-testimonial-content">
                                <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer vestibulum, sem et bibendum fringilla, orci lorem tempor sem, luctus tincidunt est arcu eu arcu. Nam arcu nulla, dignissim id tempor eget, sollicitudin vel metus. </p>
                                <h4>David Miller</h4>
                                <h5>Happy Client</h5>
                            </div>
                        </div>
                        <div class="tv-testimonial-block">
                            <div class="tv-testimonial-img">
                                <img src="images/comment1.jpg" class="img-circle img-responsive" alt="testiimg" style="width:80px;">
                            </div>
                            <div class="tv-testimonial-content">
                                <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer vestibulum, sem et bibendum fringilla, orci lorem tempor sem, luctus tincidunt est arcu eu arcu. Nam arcu nulla, dignissim id tempor eget, sollicitudin vel metus. </p>
                                <h4>David Miller</h4>
                                <h5>Happy Client</h5>
                            </div>
                        </div>
                        <div class="tv-testimonial-block">
                            <div class="tv-testimonial-img">
                                <img src="images/comment2.jpg" class="img-circle img-responsive" alt="testiimg" style="width:80px;">
                            </div>
                            <div class="tv-testimonial-content">
                                <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer vestibulum, sem et bibendum fringilla, orci lorem tempor sem, luctus tincidunt est arcu eu arcu. Nam arcu nulla, dignissim id tempor eget, sollicitudin vel metus. </p>
                                <h4>David Miller</h4>
                                <h5>Happy Client</h5>
                            </div>
                        </div>
                        <div class="tv-testimonial-block">
                            <div class="tv-testimonial-img">
                                <img src="images/comment3.jpg" class="img-circle img-responsive" alt="testiimg" style="width:80px;">
                            </div>
                            <div class="tv-testimonial-content">
                                <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer vestibulum, sem et bibendum fringilla, orci lorem tempor sem, luctus tincidunt est arcu eu arcu. Nam arcu nulla, dignissim id tempor eget, sollicitudin vel metus. </p>
                                <h4>David Miller</h4>
                                <h5>Happy Client</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Testimonial Section-->

        <script>
            $(document).ready(function () {
                $('#owl-example').owlCarousel({
                    margin: 10,
                    nav: true,
                    items: 3,
                    dots: false,
//      navText : ['<i class="fa fa-arrow-left" aria-hidden="true"></i>','<i class="fa fa-arrow-right" aria-hidden="true"></i>']
                    navText: ["<img src='images/left-arrow.png'>", "<img src='images/right-arrow.png'>"],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        700: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            });
        </script>

        <!--Awesome Dishes Category-->
        <section class="tv-section-padding" id="dishes">
            <div class="container">
                <div class="row">
                    <div class="tv-citreat-title">
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                        <h3>Our Awesome Dishes</h3>
                    </div>
                    <div class="tv-dishescat-clear tv-dishescat-clear-small">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="tv-dishescat-block">
                                <div class="menu-item">
                                    <div class="image hover-zoom">
                                        <a><img src="images/Image24.jpg" class="width-100 img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                    <h4>Appetizers</h4>
                                    <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="tv-dishescat-block">
                                <div class="menu-item">
                                    <div class="image hover-zoom">
                                        <a><img src="images/Image25.jpg" class="width-100 img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                    <h4>Meat Dishes</h4>
                                    <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="tv-dishescat-block">
                                <div class="menu-item">
                                    <div class="image hover-zoom">
                                        <a><img src="images/Image26.jpg" class="width-100 img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                    <h4>Seafood</h4>
                                    <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="tv-dishescat-block">
                                <div class="menu-item">
                                    <div class="image hover-zoom">
                                        <a><img src="images/Image27.jpg" class="width-100 img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                    <h4>Cake</h4>
                                    <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="tv-dishescat-block">
                                <div class="menu-item">
                                    <div class="image hover-zoom">
                                        <a><img src="images/Image28.jpg" class="width-100 img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                    <h4>Wine List</h4>
                                    <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="tv-dishescat-block">
                                <div class="menu-item">
                                    <div class="image hover-zoom">
                                        <a><img src="images/Image29.jpg" class="width-100 img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                    <h4>Chili</h4>
                                    <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="tv-dishescat-block">
                                <div class="menu-item">
                                    <div class="image hover-zoom">
                                        <a><img src="images/Image30.jpg" class="width-100 img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                    <h4>Salads</h4>
                                    <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="tv-dishescat-block">
                                <div class="menu-item">
                                    <div class="image hover-zoom">
                                        <a><img src="images/Image31.jpg" class="width-100 img-responsive" alt=""></a>
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                    <h4>Noodles</h4>
                                    <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--EndAwesome Dishes Category-->

        <!--Statistics Section-->
        <section class="tv-section-padding">
            <div class="tv-fixed-img tv-section-padding-70" style="background-image:url('images/Image22.png')">
                <div class="container">
                    <div class="tv-citreat-title">
                        <p class="counter-p">Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                        <h3>Our Statistics</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="tv-statistics-block">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/users.png" class="media-object" style="width:40px;" />
                                    </div>
                                    <div class="media-body">
                                        <div class="tv-statistics-counter">
                                            <p class="counter" data-slno="1" data-min="0" data-max="4567" data-delay=".9" data-increment="1">4567</p>
                                            <h5>Happy Clients</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="tv-statistics-block">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/spoon.png" class="media-object" style="width:40px;" />
                                    </div>
                                    <div class="media-body">
                                        <div class="tv-statistics-counter">
                                            <p class="counter" data-slno="1" data-min="0" data-max="6163" data-delay=".9" data-increment="1">6163</p>
                                            <h5>Dishes Cooked</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="tv-statistics-block">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/glass.png" class="media-object" style="width:40px;" />
                                    </div>
                                    <div class="media-body">
                                        <div class="tv-statistics-counter">
                                            <p class="counter" data-slno="1" data-min="0" data-max="1345" data-delay=".9" data-increment="1">1345</p>
                                            <h5>Mugs Of Beer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="tv-statistics-block">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/trophy.png" class="media-object" style="width:40px;" />
                                    </div>
                                    <div class="media-body">
                                        <div class="tv-statistics-counter">
                                            <p class="counter" data-slno="1" data-min="0" data-max="5670" data-delay=".9" data-increment="1">5670</p>
                                            <h5>Awards Won</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Statistics Section-->

        <!--Counter Script-->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 20,
                    time: 1000
                });
            });
        </script>
        <!--End Counter Script-->

        <!--Event Section-->
        <section class="tv-section-padding" id="event">
            <div class="tv-fixed-img tv-section-padding-70" style="background-image:url('images/Image6.png')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-6 col-xs-12">
                            <div class="tv-planning-block">
                                <h4>Planning An Event</h4>
                                <div class="tv-event-button text-center">
                                    <a  href="" class="tv-submit-button reservation-button">Get in touch</a>
                                </div>
                                <p class="planning-1">Name is the perfect venue for almost any event. big or small</p>
                                <p class="planning-2">(Vivamus quam sapien, scelerisque a libero at)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Event Section-->

        <!--Gallery Section-->
        <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-citreat-title">
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                        <h3>Our Gallery</h3>
                    </div>
                    <ul id="grid" class="my-shuffle-container">
                        <li class="item grid-item col-md-3 col-sm-6 col-xs-12 tv-grid-gutter-10">
                            <a href="images/Image12.jpeg" data-image-popup="">
                                <div class="portfolio-img">

                                    <figure>
                                        <img src="images/Image12.jpeg" alt="portfolio-image">
                                        <figcaption>
                                            <div class="tv-img-content">
                                                <img src="images/image-gallery.png" style="width: 40px;"/>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="item grid-item col-md-3 col-sm-6 col-xs-12 tv-grid-gutter-10">
                            <a href="images/Image13.jpg" data-image-popup="">
                                <div class="portfolio-img">

                                    <figure>
                                        <img src="images/Image13.jpg" alt="portfolio-image">
                                        <figcaption>
                                            <div class="tv-img-content">
                                                <img src="images/image-gallery.png" style="width: 40px;"/>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="item grid-item col-md-3 col-sm-6 col-xs-12 tv-grid-gutter-10">
                            <a href="images/Image14.jpg" data-image-popup="">
                                <div class="portfolio-img">

                                    <figure>
                                        <img src="images/Image14.jpg" alt="portfolio-image">
                                        <figcaption>
                                            <div class="tv-img-content">
                                                <img src="images/image-gallery.png" style="width: 40px;"/>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="item grid-item col-md-3 col-sm-6 col-xs-12 tv-grid-gutter-10">
                            <a href="images/Image12.jpeg" data-image-popup="">
                                <div class="portfolio-img">

                                    <figure>
                                        <img src="images/Image12.jpeg" alt="portfolio-image">
                                        <figcaption>
                                            <div class="tv-img-content">
                                                <img src="images/image-gallery.png" style="width: 40px;"/>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="item grid-item col-md-3 col-sm-6 col-xs-12 tv-grid-gutter-10">
                            <a href="images/Image17.jpg" data-image-popup="">
                                <div class="portfolio-img">
                                    <figure>
                                        <img src="images/Image17.jpg" alt="portfolio-image">
                                        <figcaption>
                                            <div class="tv-img-content">
                                                <img src="images/image-gallery.png" style="width: 40px;"/>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="item grid-item col-md-3 col-sm-6 col-xs-12 tv-grid-gutter-10">
                            <a href="images/Image19.jpg" data-image-popup="">
                                <div class="portfolio-img">
                                    <figure>
                                        <img src="images/Image19.jpg" alt="portfolio-image">
                                        <figcaption>
                                            <div class="tv-img-content">
                                                <img src="images/image-gallery.png" style="width: 40px;"/>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="item grid-item col-md-3 col-sm-6 col-xs-12 tv-grid-gutter-10">
                            <a href="images/Image21.jpg" data-image-popup="">
                                <div class="portfolio-img">

                                    <figure>
                                        <img src="images/Image21.jpg" alt="portfolio-image">
                                        <figcaption>
                                            <div class="tv-img-content">
                                                <img src="images/image-gallery.png" style="width: 40px;"/>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="item grid-item col-md-3 col-sm-6 col-xs-12 tv-grid-gutter-10">
                            <a href="images/Image11.jpeg" data-image-popup="">
                                <div class="portfolio-img">
                                    <figure>
                                        <img src="images/Image11.jpeg" alt="portfolio-image">
                                        <figcaption>
                                            <div class="tv-img-content">
                                                <img src="images/image-gallery.png" style="width: 40px;"/>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="item grid-item col-md-3 col-sm-6 col-xs-12 tv-grid-gutter-10">
                            <a href="images/Image10.jpeg" data-image-popup="">
                                <div class="portfolio-img">

                                    <figure>
                                        <img src="images/Image10.jpeg" alt="portfolio-image">
                                        <figcaption>
                                            <div class="tv-img-content">
                                                <img src="images/image-gallery.png" style="width: 40px;"/>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="item grid-item col-md-3 col-sm-6 col-xs-12 tv-grid-gutter-10">
                            <a href="images/Image7.png" data-image-popup="">
                                <div class="portfolio-img">
                                    <figure>
                                        <img src="images/Image7.png" alt="portfolio-image">
                                        <figcaption>
                                            <div class="tv-img-content">
                                                <img src="images/image-gallery.png" style="width: 40px;"/>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="item grid-item col-md-3 col-sm-6 col-xs-12 tv-grid-gutter-10">
                            <a href="images/Image8.jpeg" data-image-popup="">
                                <div class="portfolio-img">
                                    <figure>
                                        <img src="images/Image8.jpeg" alt="portfolio-image">
                                        <figcaption>
                                            <div class="tv-img-content">
                                                <img src="images/image-gallery.png" style="width: 40px;"/>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="item grid-item col-md-3 col-sm-6 col-xs-12 tv-grid-gutter-10">
                            <div class="portfolio-img">
                                <a href="images/Image4.png" data-image-popup="">
                                    <figure>
                                        <img src="images/Image4.png" alt="portfolio-image">
                                        <figcaption>
                                            <div class="tv-img-content">
                                                <img src="images/image-gallery.png" style="width: 40px;"/>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Gallery Section-->

        <!--Our Chef Section-->
        <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-citreat-title">
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                        <h3>Our Chef</h3>
                    </div>
                    <div id="owl-example1" class="owl-carousel owl-theme">
                        <div class="tv-chef-block">
                            <div class="tv-chef-img">
                                <img src="images/chef1.png" class="img-circle img-responsive" alt="testiimg" style="width:150px; height:150px;">
                            </div>
                            <div class="tv-chef-content">
                                <h4>Laura Marsh</h4>
                                <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer vestibulum, sem et bibendum fringilla</p>
                                <div class="tv-social-navbar">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                    <a href="#"><span class="fa fa-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="tv-chef-block">
                            <div class="tv-chef-img">
                                <img src="images/chef2.png" class="img-circle img-responsive" alt="testiimg" style="width:150px; height:150px;">
                            </div>
                            <div class="tv-chef-content">
                                <h4>Steve Harmision</h4>
                                <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer vestibulum, sem et bibendum fringilla</p>
                                <div class="tv-social-navbar">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                    <a href="#"><span class="fa fa-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="tv-chef-block">
                            <div class="tv-chef-img">
                                <img src="images/chef3.png" class="img-circle img-responsive" alt="testiimg" style="width:150px; height:150px;">
                            </div>
                            <div class="tv-chef-content">
                                <h4>Charlotte edwards</h4>
                                <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer vestibulum, sem et bibendum fringilla</p>
                                <div class="tv-social-navbar">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                    <a href="#"><span class="fa fa-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="tv-chef-block">
                            <div class="tv-chef-img">
                                <img src="images/chef1.png" class="img-circle img-responsive" alt="testiimg" style="width:150px; height:150px;">
                            </div>
                            <div class="tv-chef-content">
                                <h4>Charlotte edwards</h4>
                                <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer vestibulum, sem et bibendum fringilla</p>
                                <div class="tv-social-navbar">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                    <a href="#"><span class="fa fa-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="tv-chef-block">
                            <div class="tv-chef-img">
                                <img src="images/chef2.png" class="img-circle img-responsive" alt="testiimg" style="width:150px; height:150px;">
                            </div>
                            <div class="tv-chef-content">
                                <h4>Charlotte edwards</h4>
                                <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer vestibulum, sem et bibendum fringilla</p>
                                <div class="tv-social-navbar">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                    <a href="#"><span class="fa fa-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="tv-chef-block">
                            <div class="tv-chef-img">
                                <img src="images/chef3.png" class="img-circle img-responsive" alt="testiimg" style="width:150px; height:150px;">
                            </div>
                            <div class="tv-chef-content">
                                <h4>Charlotte edwards</h4>
                                <p>Donec feugiat mauris non sem gravida, consequat luctus arcu sagittis. Integer vestibulum, sem et bibendum fringilla</p>
                                <div class="tv-social-navbar">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                    <a href="#"><span class="fa fa-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Our Chef Section-->

        <script>
            $(document).ready(function () {
                $('#owl-example1').owlCarousel({
                    margin: 10,
                    nav: true,
                    items: 3,
                    dots: false,
//      navText : ['<i class="fa fa-arrow-left" aria-hidden="true"></i>','<i class="fa fa-arrow-right" aria-hidden="true"></i>']
                    navText: ["<img src='images/left-arrow.png'>", "<img src='images/right-arrow.png'>"],
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        700: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            });
        </script>

        <!--Blog Section-->
        <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-citreat-title">
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                        <h3>Latest Blog</h3>
                    </div>
                    <div class="tv-blog-clear">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="tv-blog-block">
                                <img src="images/Image11.jpeg" class="width-100 img-responsive" alt="blogimg" />
                                <div class="media">
                                    <div class="media-left">
                                        <h4>31</h4>
                                        <p>DEC</p>
                                    </div>
                                    <div class="media-body">
                                        <p>I must explain to you how all this mistaken idea of denouncing pleasure</p>
                                        <hr class="hr-service">
                                        <span>Posted By:Admin</span>
                                    </div>
                                </div>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil</p>
                                <div class="tv-event-button">
                                    <a href="" class="tv-submit-button reservation-button">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="tv-blog-block">
                                <img src="images/Image12.jpeg" class="width-100 img-responsive" alt="blogimg" />
                                <div class="media">
                                    <div class="media-left">
                                        <h4>31</h4>
                                        <p>DEC</p>
                                    </div>
                                    <div class="media-body">
                                        <p>I must explain to you how all this mistaken idea of denouncing pleasure</p>
                                        <hr class="hr-service">
                                        <span>Posted By:Admin</span>
                                    </div>
                                </div>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil</p>
                                <div class="tv-event-button">
                                    <a href="" class="tv-submit-button reservation-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Blog Section-->

        <!--Footer Section-->
        <footer class="tv-section-padding">
            <div class="tv-fixed-img tv-section-footer-padding" style="background-image:url('images/Image7.png')">
                <div class="tv-footer-bg tv-bg-citreat"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="tv-footer-title">
                                <a href="home.html">FoodFusion</a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="tv-footer-desc">
                                <ul class="list-unstyled footer-menu">
                                    <li class=""><a class="tv-menu">home</a></li>
                                    <li class=""><a class="tv-menu">Services</a></li>
                                    <li class=""><a class="tv-menu">Menu</a></li>
                                    <li class=""><a class="tv-menu">Reservation</a></li>
                                    <li class=""><a class="tv-menu">Dishes</a></li>
                                    <li class=""><a class="tv-menu">Gallery</a></li>
                                    <li class=""><a class="tv-menu">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="tv-footer-copyright text-center">
                                <!--Do not remove Backlink from footer of the template. To remove it you can purchase the Backlink !-->
                                <p>&copy; All right reserved. Designed by <a href="https://www.themevault.net">ThemeVault</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer Section-->

        <!--Magnefic Popup Script-->
        <script>
            $(document).ready(function () {
                var $imagePopup = $('[data-image-popup]');
                /*Image*/
                $imagePopup.magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            });
        </script>
        <!--Magnefic Popup Script Ends Here..-->

        <a id="back-to-top" style="display: none;"><img src="images/groceries.png" /></a>

    </body>
</html>
