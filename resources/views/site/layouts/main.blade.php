<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Anger Hotel Booking is a modern, responsive and easy to customize anger hotel booking Premium website HTML template">
<meta name="keywords" content="online booking, hotel, Bootstrap4, Template, multipurpose, hotel website templates, Responsive, HTML5">

<!-- SITE TITLE -->
<title>Anger Hotel Booking - Hotel Online Booking HTML Template</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Icon Font -->
<link href="{{asset('assets/css/ico-moon.css')}}" rel="stylesheet">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/linearicons.css')}}">
<!-- DatePicker CSS -->
<link href="{{asset('assets/css/datepicker.min.css')}}" rel="stylesheet">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.theme.css')}}">
<link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.theme.default.min.css')}}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
<!-- Demo Hosting Style CSS -->
<link rel="stylesheet" href="{{ asset('css/demo-hotel.css')}}">
<link rel="stylesheet" id="layoutstyle" href="{{    asset('assets/color/theme-green.css')}}">

</head>

<body>

<!-- LOADER -->
<div class="preloader">
    <div class="loader_grid">
      <div class="loader_box loader_box1"></div>
      <div class="loader_box loader_box2"></div>
      <div class="loader_box loader_box3"></div>
      <div class="loader_box loader_box4"></div>
      <div class="loader_box loader_box5"></div>
      <div class="loader_box loader_box6"></div>
      <div class="loader_box loader_box7"></div>
      <div class="loader_box loader_box8"></div>
      <div class="loader_box loader_box9"></div>
    </div>
</div>
<!-- END LOADER -->

<!-- START HEADER -->
<header class="header_wrap dark_skin hover_menu_style4">
	<div class="top-header bg-dark border-0 light_skin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-sm-9">
                    <ul class="contact_detail list_none text-center text-md-left">
                        <li  style="color:black"><i class="ti-mobile"></i>123-456-7890</li>
                        <li  style="color:black"><i class="ti-location-pin" ></i>123 Street, New South London , UK</li>
                    </ul>
                </div>
                <div class="col-md-5 col-sm-3">
                	<a href="{{route('login')}}" class="btn btn-outline-primary page-scroll btn-sm float-right d-md-block d-none" style="color:black">Mon espace</a>
                	<div class="lng_dropdown lng_dropdown_white float-sm-right mr-md-3 d-sm-block d-none">
                        <select name="countries" id="lng_select" tabindex="-1">
                            <option value="fn" data-image="{{asset('images/fn.png')}}" data-title="France">FN</option>
                            <option value="en" data-image="{{asset('images/eng.png')}}" data-title="English">EN</option>
                            <option value="us" data-image="{{asset('images/us.png')}}" data-title="United States">US</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand brand_150X50" href="index-27.html">
                <img class="logo_light" src="{{asset('logo/logo.jpg')}}" alt="logo"  style="width: 50px; height:50px" width="50px" height="50px" />
                <img class="logo_dark" src="{{asset('logo/logo.jpg')}}" alt="logo"  style="width: 50px; height:50px" width="50px" height="50px" />
                <img class="logo_default" src="{{asset('logo/logo.jpg')}}" alt="logo"  style="width: 50px; height:50px" width="50px" height="50px" />
            </a>
            <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li>
                    	<a class="nav-link active" href="#">Accueil</a>
                    </li>
                    <li class="dropdown">
                   		<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Biens</a>
                        <div class="dropdown-menu">
                            <ul>
                                @foreach (\App\Models\TypeBien::all() as $typeBien)
                                <li><a class="dropdown-item nav-link nav_item" href="#">{{$typeBien->libelle}}</a></li>
                                @endforeach
                                {{-- <li><a class="dropdown-item nav-link nav_item" href="demo-hotel/gallery-masonry.html">Gallery Masonry</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="demo-hotel/places.html">Places</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="demo-hotel/place-detail.html">Place Detail</a></li> --}}
                            </ul>
                        </div>
                    </li>
                    {{-- <li class="dropdown">
                    	<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Rooms</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="demo-hotel/room.html">Rooms</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="demo-hotel/room-right-sidebar.html">Room Right Sidebar</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="demo-hotel/room-list-right-sidebar.html">Room List Right Sidebar</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="demo-hotel/single-room.html">Single Room</a></li>
                            </ul>
                        </div>
                    </li> --}}

                    <li>
                        <a class="nav-link" href="#">Contact</a>
                    </li>
				</ul>
            </div>

        </nav>
    </div>
</header>
<!-- END HEADER -->


@yield('content')





<!-- START FOOTER SECTION -->
<footer class="footer_dark">
	<div class="top_footer">
        <div class="container">
       		<div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                	<div class="footer_logo">
                        <a class="page-scroll" href="index-27.html"><img alt="logo" src="demo-hotel/images/logo_white.png"></a>
                    </div>
                    <p class="mb-4">Phasellus blandit massa enim. elit id varius nunc. Lorem ipsum dolor sit amet, consectetur industry.</p>
                    <h6 class="widget_title text-uppercase">Follow us on</h6>
                    <ul class="list_none social_icons radius_social">
                        <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#" class="sc_gplus"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                        <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                        <li><a href="#" class="sc_linkedin"><i class="ion-social-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                	<h6 class="widget_title text-uppercase">Useful Links</h6>
                    <ul class="list_none widget_links widget_links_style2">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Feedback</a></li>
                        <li><a href="#">Support center</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Our Location</a></li>
                        <li><a href="#">Activities</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                	<h6 class="widget_title text-uppercase">Recent Posts</h6>
                    <ul class="recent_post border_bottom_dash list_none">
                    	<li>
                        	<div class="post_footer">
                            	<div class="post_img">
                                	<a href="#"><img src="demo-hotel/images/letest_post1.jpg" alt="letest_post1"></a>
                                </div>
                                <div class="post_content">
                                	<h6><a href="#">Lorem ipsum dolor sit amet massa enim consectetur</a></h6>
                                    <p class="small m-0">April 14, 2018</p>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="post_footer">
                            	<div class="post_img">
                                	<a href="#"><img src="demo-hotel/images/letest_post2.jpg" alt="letest_post2"></a>
                                </div>
                                <div class="post_content">
                                	<h6><a href="#">Lorem ipsum dolor sit amet massa enim consectetur</a></h6>
                                    <p class="small m-0">April 14, 2018</p>
                                </div>
                            </div>
                        </li>
                        <li>
                        	<div class="post_footer">
                            	<div class="post_img">
                                	<a href="#"><img src="demo-hotel/images/letest_post3.jpg" alt="letest_post3"></a>
                                </div>
                                <div class="post_content">
                                	<h6><a href="#">Lorem ipsum dolor sit amet massa enim consectetur</a></h6>
                                    <p class="small m-0">April 14, 2018</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="widget_title text-uppercase">Contact Info</h6>
                    <ul class="contact_info contact_info_light contact_info_style4 list_none">
                        <li>
                            <span class="ti-location-pin"></span>
                            <address>123 Street, Old Trafford, New South London , UK</address>
                        </li>
                        <li>
                            <span class="ti-email"></span>
                            <a href="mailto:info@sitename.com">info@sitename.com</a>
                        </li>
                        <li>
                            <span class="ti-mobile"></span>
                            <p>+ 457 789 789 65</p>
                        </li>
                        <li>
                            <span class="ti-world"></span>
                            <p>www.yoursitename.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer bg-dark">
    	<div class="container">
        	<div class="row align-items-center">
            	<div class="col-md-6">
                	<p class="copyright m-md-0 text-center text-md-left">© 2018 All Rights Reserved by Anger.</p>
                </div>
                <div class="col-md-6">
                	<ul class="list_none footer_link text-center text-md-right">
                    	<li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER SECTION -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

<!-- Latest jQuery -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<!-- jquery-ui -->
<script src="assets/js/jquery-ui.js"></script>
<!-- popper min js -->
<script src="assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="assets/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="assets/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="assets/js/parallax.js"></script>
<!-- countdown js  -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- fit video  -->
<script src="assets/js/jquery.fitvids.js"></script>
<!-- jquery.counterup.min js -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- isotope min js -->
<script src="assets/js/isotope.min.js"></script>
<!-- elevatezoom js -->
<script src='assets/js/jquery.elevatezoom.js'></script>
<!-- jquery.dd.min -->
<script src="assets/js/jquery.dd.min.js"></script>
<!-- DatePicker js -->
<script type="text/javascript" src="assets/js/datepicker.min.js"></script>
<!-- Hoverparallax -->
<script src="assets/js/Hoverparallax.min.js"></script>
<!-- jquery.parallax-scroll js -->
<script src="assets/js/jquery.parallax-scroll.js"></script>
<!-- Demo js -->
<script src="js/demo-hotel.js"></script>
<!-- scripts js -->
<script src="assets/js/scripts.js"></script>

</body>
</html>
