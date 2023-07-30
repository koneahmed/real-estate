
@extends('site.layouts.main')

@section('content')

<!-- START SECTION BANNER -->
<section class="parallax_bg breadcrumb_section overlay_bg_50 page-title-light" data-parallax-bg-image="{{asset('img/banner.jpeg')}}">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-6">
            	<div class="page-title">
            		<h1>Bien disponibles</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rooms Right Sidebar</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION ROOM --> 
<section class="scroll_wrapper">
	<div class="container">
    	<div class="row">
    		<div class="col-xl-9 col-lg-8">
            	<div class="row">
                    <div class="col-md-6">
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
                                <h5><a href="#">Classic Double Room</a></h5>
                                {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p> --}}
                                <div class="item_foot">
                                    <div class="room_price">
                                        <h4 class="text_default">$350.00</h4> 
                                        <span>Per nights</span>
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
                    <div class="col-md-6">
                        <div class="item_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                            <div class="item_img">
                                <a href="#"><img src="images/room_img2.jpg" alt="room_img2"></a>
                                <div class="room_services">
                                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                    <i class="fa fa-bath" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                </div>
                            </div>
                            <div class="item_info">
                                <h5><a href="#">Classic Double Room</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                <div class="item_foot">
                                    <div class="room_price">
                                        <h4 class="text_default">$450.00</h4> 
                                        <span>Per nights</span>
                                    </div>
                                    <div class="item_stars">
                                        <div class="stars">
                                            <i class="ion-android-star"></i> 
                                            <i class="ion-android-star"></i> 
                                            <i class="ion-android-star-half"></i> 
                                            <i class="ion-android-star-outline"></i> 
                                            <i class="ion-android-star-outline"></i> 
                                        </div>
                                        <span>(3.5 Rating)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                            <div class="item_img">
                                <a href="#"><img src="images/room_img3.jpg" alt="room_img3"></a>
                                <div class="room_services">
                                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                    <i class="fa fa-bath" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                    <i class="fa fa-tv" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="TV with cable channels" data-original-title="TV"></i>
                                </div>
                                <span class="badge badge-danger">Sale</span>
                            </div>
                            <div class="item_info">
                                <h5><a href="#">Classic Double Room</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                <div class="item_foot">
                                    <div class="room_price">
                                        <h4 class="text_default">$550.00</h4> 
                                        <span>Per nights</span>
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
                    <div class="col-md-6">
                        <div class="item_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                            <div class="item_img">
                                <a href="#"><img src="images/room_img4.jpg" alt="room_img4"></a>
                                <div class="room_services">
                                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                    <i class="fa fa-bath" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                    <i class="fa fa-tv" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="TV with cable channels" data-original-title="TV"></i>
                                </div>
                                <span class="badge badge-danger">Sale</span>
                            </div>
                            <div class="item_info">
                                <h5><a href="#">Classic Double Room</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                <div class="item_foot">
                                    <div class="room_price">
                                        <h4 class="text_default">$499.00</h4> 
                                        <span>Per nights</span>
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
                    <div class="col-md-6">
                        <div class="item_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                            <div class="item_img">
                                <a href="#"><img src="images/room_img5.jpg" alt="room_img5"></a>
                                <div class="room_services">
                                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                    <i class="fa fa-bath" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                    <i class="fa fa-tv" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="TV with cable channels" data-original-title="TV"></i>
                                </div>
                                <span class="badge badge-danger">Sale</span>
                            </div>
                            <div class="item_info">
                                <h5><a href="#">Classic Double Room</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                <div class="item_foot">
                                    <div class="room_price">
                                        <h4 class="text_default">$567.00</h4> 
                                        <span>Per nights</span>
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
                    <div class="col-md-6">
                        <div class="item_box animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                            <div class="item_img">
                                <a href="#"><img src="images/room_img6.jpg" alt="room_img6"></a>
                                <div class="room_services">
                                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                    <i class="fa fa-bath" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                    <i class="fa fa-tv" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="TV with cable channels" data-original-title="TV"></i>
                                </div>
                                <span class="badge badge-danger">Sale</span>
                            </div>
                            <div class="item_info">
                                <h5><a href="#">Classic Double Room</a></h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                <div class="item_foot">
                                    <div class="room_price">
                                        <h4 class="text_default">$534.00</h4> 
                                        <span>Per nights</span>
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
                    <div class="col-12 mt-3">
                        <ul class="pagination pagination_style8 justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="ion-ios-arrow-thin-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="ion-ios-arrow-thin-right"></i></a></li>
                        </ul>
                    </div>
                </div>	
        	</div>
            <div class="col-xl-3 col-lg-4">
            	<div class="room_filter_sidebar fixed_scroll_item" data-margintop="100" data-minwidth-fixed="991">
                	<div class="widget widget_availability">
                        <h5 class="filter_title">Check Availability</h5>
                        <form class="form_style2">
                            <div class="form-group">
                                <div class="form_control">
                                    <input required="required" placeholder="Araival date" class="form-control datepicker" name="date" type="text">
                                    <span class="form_icon"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form_control">
                                    <input required="required" placeholder="Departure date" class="form-control datepicker" name="date" type="text">
                                    <span class="form_icon"><i class="ti-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom_select">
                                    <select class="form-control not_chosen" required="required">
                                        <option value="">Adults</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom_select">
                                    <select class="form-control not_chosen" required="required">
                                        <option value="">Children</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-block" name="submit">Check Availability</button>
                            </div>
                        </form>
                    </div>
                    <div class="widget">
                    	<h5 class="filter_title">Filter</h5>
                        <div class="filter_price">
                             <div id="price_filter"></div>
                             <div class="d-flex align-items-center justify-content-between">
                                 <span class="text-white">Price <span id="flt_price"></span></span>
                                 <input type="hidden" id="price_first" readonly>
                                 <input type="hidden" id="price_second" readonly>
                                 <button type="submit" class="btn btn-default">Filter</button>
                             </div>
                         </div>
                    </div>
                    <div class="widget widget_facilities">
                        <h5 class="filter_title">Rooms Facilities</h5>
                        <div class="form_style2">
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="Airconditioning" value="">
                                <label class="form-check-label" for="Airconditioning">Airconditioning</label>
                            </div>
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="Balcony" value="">
                                <label class="form-check-label" for="Balcony">Balcony/terrace</label>
                            </div>
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="Bath" value="">
                                <label class="form-check-label" for="Bath">Bath</label>
                            </div>
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="Casino" value="">
                                <label class="form-check-label" for="Casino">Casino</label>
                            </div>
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="Health" value="">
                                <label class="form-check-label" for="Health">Health Club</label>
                            </div>
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="Non-smoking" value="">
                                <label class="form-check-label" for="Non-smoking">Non-smoking</label>
                            </div>
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="Parking" value="">
                                <label class="form-check-label" for="Parking">Parking</label>
                            </div>
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="Restaurant" value="">
                                <label class="form-check-label" for="Restaurant">Restaurant</label>
                            </div>
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="Service" value="">
                                <label class="form-check-label" for="Service">Room Service</label>
                            </div>
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="Wi-Fi" value="">
                                <label class="form-check-label" for="Wi-Fi">Wi-Fi</label>
                            </div>
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="TV" value="">
                                <label class="form-check-label" for="TV">TV</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ROOM --> 

@endsection