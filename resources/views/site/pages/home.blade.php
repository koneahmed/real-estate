
@extends('site.layouts.main')

@section('content')
<!-- START SECTION BANNER -->
<section class="banner_section p-0 full_screen">
    <div id="carouselExampleControls" class="banner_content_wrap carousel carousel-fade slide light_arrow3" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active background_bg overlay_bg_60" data-img-src="{{asset('img/slide-1.jpg')}}">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-md-12 col-sm-12 text-center">
                            <div class="banner_content text_white">
                                <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.2s">Bienvenue à KZ immobilier </h2>
                                <p class="animation mt-3 mb-4" data-animation="fadeInUp" data-animation-delay="0.3s">Lorem is simply text of the printing and typesetting industry.</p>
                                {{-- <a class="btn btn-default animation" href="#" data-animation="fadeInUp" data-animation-delay="0.4s">Explore Now</a>
                                <a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp" data-animation-delay="0.5s">Contact Now</a> --}}
                            </div>
                        </div>
                    </div>
                </div><!-- END CONTAINER-->
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_60" data-img-src="{{asset('img/slide-1.jpg')}}">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row justify-content-center">
                            <div class="col-xl-9 col-md-12 col-sm-12 text-center">
                                <div class="banner_content text_white">
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.2s">Tour for you</h2>
                                    <p class="animation mt-3 mb-4" data-animation="fadeInUp" data-animation-delay="0.3s">Contrary to popular belief, Lorem Ipsum is not simply random</p>
                                    <a class="btn btn-default animation" href="#" data-animation="fadeInUp" data-animation-delay="0.4s">Get Started</a>
                                    <a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp" data-animation-delay="0.5s">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg_60" data-img-src="{{asset('img/slide-1.jpg')}}">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row justify-content-center">
                            <div class="col-xl-9 col-md-12 col-sm-12 text-center">
                                <div class="banner_content text_white">
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.2s">Travel around the world</h2>
                                    <p class="animation mt-3 mb-4" data-animation="fadeInUp" data-animation-delay="0.3s">Contrary to popular belief, Lorem Ipsum is not simply random</p>
                                    <a class="btn btn-default animation" href="#" data-animation="fadeInUp" data-animation-delay="0.4s">Get Started</a>
                                    <a class="btn btn-outline-white animation" href="#" data-animation="fadeInUp" data-animation-delay="0.5s">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="linearicons-arrow-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="linearicons-arrow-right"></i></a>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION AVAILABILITY -->
<section class="pt-sm-0 small_pb">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<div class="booking_form animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                    <form>
                        <div class="form-row align-items-end">
                            <div class="form_col">
                                <label>Que cherchez vous ?</label>
                                <div class="form_control">
                                    <input required="required" placeholder="Araival date" class="form-control" name="search" type="text">
                                    {{-- <input required="required" placeholder="Araival date" class="form-control datepicker" name="date" type="text"> --}}
                                    {{-- <span class="form_icon"><i class="ti-calendar"></i></span> --}}
                                </div>
                            </div>
                            {{-- <div class="form_col">
                                <label>Check Out</label>
                                <div class="form_control">
                                    <input required="required" placeholder="Departure date" class="form-control datepicker" name="date" type="text">
                                    <span class="form_icon"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form_col">
                                <label>Adults</label>
                                <div class="custom_select">
                                    <select class="form-control" required="required">
                                        <option value="">Adults</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div> --}}
                            {{-- <div class="form_col">
                                <label>Children</label>
                                <div class="custom_select">
                                    <select class="form-control" required="required">
                                        <option value="">Children</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="form_col col-lg-2">
                                <button type="submit" class="btn btn-default btn-block" name="submit">Recherchez</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION AVAILABILITY -->

<!-- START SECTION ABOUT -->
<section class="small_pt small_pb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
                <div class="heading_s2"> 
					<h2>Qui sommes nous</h2>
                </div>
                <p>KZ immobilier est une entreprise qui met en relation les propriètaires et les potentiels locataires .</p>
                <p>Nous offrons : </p>
                <div class="list_style_4 color_blue mb-3">
                    <ul>
                        <li>Deep Customization Process</li>
                        <li>Technologies And Innovations consultant</li>
                        <li>Secured Transactions consultant</li>
                        <li>Unique Sales Methodoligies</li>
                    </ul>
                </div>
                {{-- <a href="#" class="btn btn-default mt-md-2">Read More</a> --}}
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s"> 
                <div class="overlay_bg_50 about_video_img mt-4 mt-lg-0">
            		<img src="{{asset('img/agent-7.jpg')}}" alt="about_img">
                    {{-- <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup video_play"><img class="bounce_img" src="{{asset('img/agent-7.jpg')}}" alt="play-icon"></a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->

<!-- START SECTION ROOM --> 
<section class="small_pt">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-7 col-md-9 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
            	<div class="heading_s2 text-center">
                	<h2>Quelques Biens</h2>
                </div>
                {{-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p> --}}
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="small_divider clearfix"></div>
            </div>
        </div>
    	<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6">
            	<div class="item_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                	<div class="item_img">
                    	<a href="#"><img src="{{asset('img/b1.jpg')}}" alt="room_img1" height="180px"></a>
                        <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                            <i class="fa fa-bath" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                            <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                            <i class="fa fa-tv" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="TV with cable channels" data-original-title="TV"></i>
                        </div>
                        <span class="badge badge-success">Location</span>
                    </div>
                    <div class="item_info">
                        <h5><a href="#">2 peices</a></h5>
                        {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p> --}}
                        <div class="item_foot">
                            <div class="room_price">
                                <h4 class="text_default">90.000 F</h4> 
                                <span>Le loyer</span>
                            </div>
                            <div class="item_stars">
                                <div class="stars">
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star-outline"></i> 
                                </div>
                                <span>(4.0 Rating)</span>
                            </div>
                        </div>
                    </div>
            	</div>
			</div>
			<div class="col-lg-4 col-md-6">
            	<div class="item_box animation" data-animation="fadeInUp" data-animation-delay="0.3s">
                	<div class="item_img">
                    	<a href="#"><img src="{{asset('img/b2.jpg')}}" alt="room_img2" height="180px"></a>
                        <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                            <i class="fa fa-bath" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                            <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                        </div>
                    </div>
                    <div class="item_info">
                        <h5><a href="#">Studio</a></h5>
                        {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p> --}}
                        <div class="item_foot">
                            <div class="room_price">
                                <h4 class="text_default">70.000 F</h4> 
                                <span>Le loyer</span>
                            </div>
                            <div class="item_stars">
                                <div class="stars">
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star-half"></i> 
                                    <i class="ion-android-star-outline"></i> 
                                    <i class="ion-android-star-outline"></i> 
                                </div>
                                <span>(2.5 Rating)</span>
                            </div>
                        </div>
                    </div>
            	</div>
			</div>
			<div class="col-lg-4 col-md-6">
            	<div class="item_box animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                	<div class="item_img">
                    	<a href="#"><img src="{{asset('img/t1.jpg')}}" alt="room_img3" height="180px"></a>
                        <div class="room_services">
                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                            <i class="fa fa-bath" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                            <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                            <i class="fa fa-tv" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="TV with cable channels" data-original-title="TV"></i>
                        </div>
                        <span class="badge badge-danger">A vendre</span>
                    </div>
                    <div class="item_info">
                        <h5><a href="#">Terrain</a></h5>
                        {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p> --}}
                        <div class="item_foot">
                            <div class="room_price">
                                <h4 class="text_default">5.000.000</h4> 
                                {{-- <span>Per nights</span> --}}
                            </div>
                            <div class="item_stars">
                                <div class="stars">
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star"></i> 
                                    <i class="ion-android-star-half"></i> 
                                    <i class="ion-android-star-outline"></i> 
                                </div>
                                <span>(4.5 Rating)</span>
                            </div>
                        </div>
                    </div>
            	</div>
           </div>
        </div>
        <div class="row">
        	<div class="col-12 text-center mt-md-4">	
            	<a href="{{route('site.result.all')}}" class="btn btn-default">Voir plus</a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ROOM --> 

@endsection