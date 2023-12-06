@extends('site.layouts.main')

@section('content')
 <!-- START SECTION BANNER -->
 <section class="parallax_bg breadcrumb_section overlay_bg_50 page-title-light"
 data-parallax-bg-image="{{ asset('img/banner.jpeg') }}">
 <div class="container">
     <div class="row align-items-center">
         <div class="col-sm-6">
             <div class="page-title">
                 <h1> {{$bien->libelle}} - {{$bien->localisation}} </h1>
             </div>
         </div>
         <div class="col-sm-6">
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb justify-content-sm-end">
                     <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Information sur un bien</li>
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
    		<div class="col-xl-8 col-lg-8">
            	<div class="rooms_slider">
                    <div id="slider_img" class="owl-carousel owl-theme nav_style2" data-nav="true" data-dots="false" data-autoplay="true">
                        <div class="item">
                            <img src="{{$bien->image ?? asset('images/room1.jpg')}}" alt="room1" height="700px"/>
                        </div>
                        {{-- <div class="item">
                            <img src="images/room2.jpg" alt="room2"/>
                        </div>
                        <div class="item">
                            <img src="images/room3.jpg" alt="room3"/>
                        </div>
                        <div class="item">
                            <img src="images/room4.jpg" alt="room4"/>
                        </div>
                        <div class="item">
                            <img src="images/room5.jpg" alt="room5"/>
                        </div>
                        <div class="item">
                            <img src="images/room6.jpg" alt="room6"/>
                        </div> --}}
                    </div>
                    {{-- <div id="thumb_img" class="owl-carousel owl-theme" data-margin="15" data-nav="true" data-dots="false" data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "768":{"items": "4"}, "1199":{"items": "5"}}'>
                        <div class="item">
                            <img src="images/thumb_img1.jpg" alt="thumb_img1"/>
                        </div>
                        <div class="item">
                            <img src="images/thumb_img2.jpg" alt="thumb_img2"/>
                        </div>
                        <div class="item">
                            <img src="images/thumb_img3.jpg" alt="thumb_img3"/>
                        </div>
                        <div class="item">
                            <img src="images/thumb_img4.jpg" alt="thumb_img4"/>
                        </div>
                        <div class="item">
                            <img src="images/thumb_img5.jpg" alt="thumb_img5"/>
                        </div>
                        <div class="item">
                            <img src="images/thumb_img6.jpg" alt="thumb_img6"/>
                        </div>
                    </div> --}}
                </div>
                <div class="room_details_text">
                    <h3 class="room_details_title">description du bien</h3>
                    <p>
                        {{$bien->description}}
                    </p>
                </div>
                {{-- <div class="room_basic_info">
                	<h3 class="room_details_title">Amenities</h3>
                    <ul>
                        <li><i class="fa fa-check"></i> Parking/Garage</li>
                        <li><i class="fa fa-check"></i> Free Wi-Fi</li>
                        <li><i class="fa fa-check"></i> Television</li>
                        <li><i class="fa fa-check"></i> Bathrooms</li>
                        <li><i class="fa fa-check"></i> Bedrooms</li>
                        <li><i class="fa fa-check"></i> Breakfast Include</li>
                        <li><i class="fa fa-check"></i> 6 Persons</li>
                        <li class="no"><i class="fa fa-times"></i> Room Service</li>
                        <li class="no"><i class="fa fa-times"></i> Beach View</li>
                        <li><i class="fa fa-check"></i> Room Service</li>
                        <li><i class="fa fa-check"></i> Restaurant</li>
                        <li><i class="fa fa-check"></i> Parking</li>
                    </ul>
                </div> --}}
                {{-- <div class="room_location">
                	<h3 class="room_details_title">Location</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193229.77301255226!2d-74.05531241936525!3d40.823236500441624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW+123rd+St%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1533565007513" allowfullscreen="" frameborder="0"></iframe>
                </div> --}}
                {{-- <div class="comment-area">
                    <div class="comment-title mb-2">
                        <h5>(03) Reviews</h5>
                    </div>
                    <ul class="list_none comment_list">
                        <li class="comment_info">
                            <div class="d-flex">
                                <div class="user_img">
                                    <img src="../assets/images/user2.jpg" alt="user2">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex align-items-md-center">
                                        <div class="meta_data">
                                            <h6><a href="#">Walter Mark</a></h6>
                                            <div class="comment-time">MARCH 5, 2018, 6:05 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                        </li>
                        <li class="comment_info reply">
                            <div class="d-flex">
                                <div class="user_img">
                                    <img src="../assets/images/user3.jpg" alt="user3">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex align-items-md-center">
                                        <div class="meta_data">
                                            <h6><a href="#">Sandhya Rani</a></h6>
                                            <div class="comment-time">april 8, 2018, 5:15 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                        </li>
                        <li class="comment_info">
                            <div class="d-flex">
                                <div class="user_img">
                                    <img src="../assets/images/user4.jpg" alt="user4">
                                </div>
                                <div class="comment_content">
                                    <div class="d-flex align-items-md-center">
                                        <div class="meta_data">
                                            <h6><a href="#">Laura Sandel</a></h6>
                                            <div class="comment-time">april 15, 2018, 10:30 PM</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="comment-reply"><i class="ion-reply-all"></i>Reply</a>
                                        </div>
                                    </div>
                                    <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that the cannot foresee the pain and trouble that.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="comment-title mb-2">
                        <h5>Submit a Review</h5>
                    </div>
                    <form class="field_form" name="enq" method="post">
                        <div class="row">
                        	<div class="form-group col-12">
                            	<p class="rating m-0">
                                	<span data-value="1" class="selected"><i class="ion-android-star-outline"></i></span>
                                    <span data-value="2" class=""><i class="ion-android-star-outline"></i></span>
                                    <span data-value="3" class=""><i class="ion-android-star-outline"></i></span>
                                    <span data-value="4" class=""><i class="ion-android-star-outline"></i></span>
                                    <span data-value="5" class=""><i class="ion-android-star-outline"></i></span>
                                </p>
                            </div>
                            <div class="form-group col-md-6">
                                <input name="name" class="form-control" placeholder="Name" required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input name="email" class="form-control" placeholder="Email" required="required" type="email">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea rows="3" name="message" class="form-control" placeholder="Comment" required="required"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button value="Submit" name="submit" class="btn btn-default" title="Submit Your Message!" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div> --}}
        	</div>
            <div class="col-xl-4 col-lg-4">
            	<div class="sidebar_content">
                	<div class="widget widget_reservation fixed_scroll_item" data-margintop="100" data-minwidth-fixed="991">
                    	<h5>Opération</h5>
                        <form class="form_style2">
                        	 {{--<div class="form-group">
                                <div class="form_control">
                                    <input required="required" placeholder="Yout Email Adderss " class="form-control" name="email" type="text">
                                    <span class="form_icon"><i class="ti-email"></i></span>
                                </div>
                            </div>
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
                            </div>--}}
                            <div class="form-group">

                                <button type="submit" class="btn btn-default btn-block" name="submit">Faire la {{$bien->type_operation}}</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ROOM -->
@endsection
