@extends('site.layouts.main')

@section('content')
    <!-- START SECTION BANNER -->
    <section class="parallax_bg breadcrumb_section overlay_bg_50 page-title-light"
        data-parallax-bg-image="{{ asset('img/banner.jpeg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h1>Information sur le bien</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-sm-end">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bien</li>
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
                <div class="col-lg-9">
                    <div class="single_post">
                        <div class="blog_img">
                            <a href="#">
                                <img src="images/blog_img1.jpg" alt="blog_img1">
                            </a>
                        </div>
                        <div class="blog_content">
                            <div class="blog_text">
                                <div class="blog_title">
                                    <h2>Why is a ticket to Lagos so expensive?</h2>
                                </div>
                                <ul class="list_none blog_meta">
                                    <li><a href="#"><i class="ion-calendar"></i> April 14, 2018</a></li>
                                    <li><a href="#"><i class="ion-chatboxes"></i> 2 Comment</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. Ut cursus leo mi, eu ultricies magna faucibus id.</p>
                                <blockquote>
                                    <p>Integer id metus sit amet turpis facilisis ullamcorper. Sed tellus tellus, elementum ac mauris in, venenatis consectetur est. Praesent condimentum ut erat sit amet bibendum. Morbi sit amet commodo est. Donec arcu nulla, pellentesque at mi in, fringilla tincidunt risus. </p>
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id dolor dui, dapibus gravida elit. Donec consequat laoreet sagittis. Suspendisse ultricies ultrices viverra. Morbi rhoncus laoreet tincidunt. Mauris interdum convallis metus. Suspendisse vel lacus est, sit amet tincidunt erat. Etiam purus sem, euismod eu vulputate eget, porta quis sapien. Donec tellus est, rhoncus vel scelerisque id, iaculis eu nibh.</p>
                                <p>Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Fusce vitae dui sit amet lacus rutrum convallis. Vivamus sit amet lectus venenatis est rhoncus interdum a vitae velit.</p>
                                <div class="py-4 blog_post_footer">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-md-8 mb-3 mb-md-0">
                                            <div class="tags">
                                                <a href="#">General</a>
                                                <a href="#">Design</a>
                                                <a href="#">jQuery</a>
                                                <a href="#">Branding</a>
                                                <a href="#">Modern</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list_none social_icons border_social radius_social text-md-right">
                                                <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                                <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                                <li><a href="#" class="sc_google"><i class="ion-social-googleplus"></i></a></li>
                                                <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                                <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-top border-bottom py-2 py-md-4 post_navigation">
                        <div class="row align-items-center justify-content-center justify-content-sm-between">
                            <div class="col-auto">
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <i class="ion-ios-arrow-thin-left mr-3"></i>
                                        <div>
                                            <span>blanditiis praesentium</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="#">
                                    <div class="d-flex align-items-center flex-row-reverse text-right">
                                        <i class="ion-ios-arrow-thin-right ml-3"></i>
                                        <div>
                                            <span>voluptatum deleniti</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 mt-md-5">
                        <div class="card-body">
                            <div class="author_img">
                                <img class="rounded-lg" src="../assets/images/user1.jpg" alt="user1">
                            </div>
                            <div class="author_info">
                                <a href="#" class="mb-2 d-inline-block">Maria Redwood</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <ul class="list_none social_icons border_social radius_social">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="comment-area">
                        <div class="comment-title mb-2 mb-sm-4">
                            <h5>(03) Comments</h5>
                        </div>
                        <ul class="list_none comment_list">
                            <li class="comment_info">
                                <div class="d-flex">
                                    <div class="user_img">
                                        <img class="rounded-lg" src="../assets/images/user2.jpg" alt="user2">
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
                                        <img class="rounded-lg" src="../assets/images/user3.jpg" alt="user3">
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
                                        <img class="rounded-lg" src="../assets/images/user4.jpg" alt="user4">
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
                        <div class="comment-title mb-2 mb-sm-4">
                            <h5>Write a comment</h5>
                        </div>
                        <form class="field_form" name="enq" method="post">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <input name="name" class="form-control" placeholder="Your Name" required="required" type="text">
                                </div>
                                <div class="form-group col-md-4">
                                    <input name="email" class="form-control" placeholder="Your Email" required="required" type="email">
                                </div>
                                <div class="form-group col-md-4">
                                    <input name="website" class="form-control" placeholder="Your Website" required="required" type="text">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea rows="3" name="message" class="form-control" placeholder="Your Comment" required="required"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button value="Submit" name="submit" class="btn btn-default" title="Submit Your Message!" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-4 pt-3 pt-lg-0">
                    <div class="sidebar fixed_scroll_item scroll-to-fixed-fixed" data-margintop="100" data-minwidth-fixed="991" style="z-index: 99; position: fixed; top: 100px; margin-left: 0px; width: 255px; left: 1059.6px;">
                        <div class="widget">
                            <h5 class="widget_title4">Search</h5>
                            <div class="widget_search_box">
                                <form>
                                    <input required="" class="form-control" placeholder="Search..." type="text">
                                    <button type="submit" class="btn btn-submit" name="submit" value="Submit">
                                        <span class="ti-search"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title4">Recent Posts</h5>
                            <ul class="recent_post border_bottom_dash list_none">
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="#"><img src="images/letest_post1.jpg" alt="letest_post1"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                            <p class="small m-0">April 14, 2018</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="#"><img src="images/letest_post2.jpg" alt="letest_post2"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                            <p class="small m-0">April 14, 2018</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post_footer">
                                        <div class="post_img">
                                            <a href="#"><img src="images/letest_post3.jpg" alt="letest_post3"></a>
                                        </div>
                                        <div class="post_content">
                                            <h6><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h6>
                                            <p class="small m-0">April 14, 2018</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title4">Categories</h5>
                            <ul class="list_none widget_categories border_bottom_dash">
                                <li><a href="#"><span class="categories_name">Design</span><span class="categories_num">(9)</span></a></li>
                                <li><a href="#"><span class="categories_name">Lifestyle</span><span class="categories_num">(6)</span></a></li>
                                <li><a href="#"><span class="categories_name">Photos</span><span class="categories_num">(4)</span></a></li>
                                <li><a href="#"><span class="categories_name">Creative</span><span class="categories_num">(7)</span></a></li>
                                <li><a href="#"><span class="categories_name">Branding</span><span class="categories_num">(12)</span></a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title4">tags</h5>
                            <div class="tags">
                                <a href="#">General</a>
                                <a href="#">Design</a>
                                <a href="#">jQuery</a>
                                <a href="#">Branding</a>
                                <a href="#">Modern</a>
                                <a href="#">Blog</a>
                                <a href="#">Quotes</a>
                                <a href="#">Advertisement</a>
                            </div>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title4">Archive</h5>
                            <ul class="list_none widget_archive border_bottom_dash">
                                <li><a href="#"><span class="archive_year">June 2017</span><span class="archive_num">(12)</span></a></li>
                                <li><a href="#"><span class="archive_year">May 2017</span><span class="archive_num">(5)</span></a></li>
                                <li><a href="#"><span class="archive_year">March 2017</span><span class="archive_num">(6)</span></a></li>
                                <li><a href="#"><span class="archive_year">January 2017</span><span class="archive_num">(7)</span></a></li>
                                <li><a href="#"><span class="archive_year">April 2016</span><span class="archive_num">(10)</span></a></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widget_title4">Newsletter</h5>
                            <div class="newsletter_form">
                                <form>
                                    <div class="outline_input-black radius_input">
                                        <input required="" placeholder="Enter Email Address" type="text">
                                    </div>
                                    <button type="submit" title="Subscribe" class="btn btn-submit border-0" name="submit" value="Submit">
                                        <span class="ti-email"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div><div style="display: block; width: 255px; height: 1449px; float: none;"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
