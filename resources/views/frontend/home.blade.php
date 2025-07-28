@extends('frontend.master')

@section('mainContent')
     <!-- Slider -->
    <section id="mt_banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url({{asset('frontend')}}/images/slider/bg2.jpg)"></div>
                    <div class="banner_caption_text">
                        <div class="post-category">
                            <ul>
                                <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                            </ul>
                        </div>
                        <h1><a href="#">Every Next Level of Your Life Will Demand a Different You</a></h1>
                        <div class="item-meta">
                            <span>by</span>
                            <a href="author.html">Admin Jackson</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url({{asset('frontend')}}/images/slider/bg1.jpg)"></div>
                    <div class="banner_caption_text">
                        <div class="post-category">
                            <ul>
                                <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                            </ul>
                        </div>
                        <h1><a href="#">The creation of beauty is art to break rules and barriers</a></h1>
                        <div class="item-meta">
                            <span>by</span>
                            <a href="author.html">Admin Jackson</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner" style="background-image:url({{asset('frontend')}}/images/slider/bg3.jpg)"></div>
                    <div class="banner_caption_text">
                        <div class="post-category">
                            <ul>
                                <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                                <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                            </ul>
                        </div>
                        <h1><a href="#">Get Scary With This Vegan Spooky Spider Crackle Cake!</a></h1>
                        <div class="item-meta">
                            <span>by</span>
                            <a href="author.html">Admin Jackson</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
    </section>
    <!-- End Slider -->

    <!--* Blog*-->
    <section id="mt_blog" class="light-bg">
        <div class="container">
            <div class="blog_post_sec blog_post_inner">
                <div class="row">
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend')}}/images/blog-listing/blog_10.jpg" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow"><a href="#" class="white">Populor</a></li>
                                        <li class="cat-pink"><a href="#" class="white">Fashion</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">Every Next Level of Your Life Will Demand a Different You</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper blog-wrapper-list">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend')}}/images/blog-listing/blog_102.jpg" alt="image" class="img-responsive center-block post_img" />
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow mar-0"><a href="#" class="white">Popular</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="">Adjusting to Your Home is no Different than a New Country</a>
                                </h2>
                                
                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">                            
                        <div class="blog-post_wrapper front-wrapper bg-green">
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">I Thought My Glasses Made Me Unattractive</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 mar-bottom-30">
                    	<!--* ads*-->
			            <div class="ads-banner-img text-center">
			                <img src="{{asset('frontend')}}/images/ads.jpg" alt="ads">
			            </div>
			            <!--* End ads*-->
                    </div>

                    <div class="col-md-8 col-sm-12 mar-bottom-30">                            
                        <div class="blog-post_wrapper image-wrapper">
                        	<div class="blog-post-image">
                                <img src="{{asset('frontend')}}/images/blog-listing/blog_13.jpg" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-pink"><a href="#" class="white">Fashion</a></li>
                                        <li class="cat-green"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">I Moved Across the Country and Never Looked Back</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper blog-wrapper-list">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend')}}/images/blog-listing/blog_101.jpg" alt="image" class="img-responsive center-block post_img" />
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-green mar-0"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="">I Thought My Glasses Made Me Unattractive</a>
                                </h2>
                                
                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 mar-bottom-30">                            
                        <div class="blog-post_wrapper front-wrapper bg-orange">
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">I Should Have Said to Your Weight Loss</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend')}}/images/blog-listing/blog_18.jpg" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                        <li class="cat-blue"><a href="#" class="white">Technology</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">Is the Natural Hair Movement Coming to an End? </a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend')}}/images/blog-listing/blog_07.jpg" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                        <li class="cat-green"><a href="#" class="white">Health</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title white">
                                    <a href="blog-details.html" class="white">Look at life with the eyes of a child</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper blog-wrapper-list">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend')}}/images/blog-listing/blog_103.jpg" alt="image" class="img-responsive center-block post_img" />
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-blue mar-0"><a href="#" class="white">Technology</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="post-content">
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="">Slice of Tokyo: How Japan Became a Pizza Hotspot</a>
                                </h2>
                                
                                <div class="item-meta">
                                    <span>by</span>
                                    <a class="author-name" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend')}}/images/blog-listing/blog_08.jpg" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-blue"><a href="#" class="white">Sports</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">How to Find Hidden Cameras in Your Airbnb, and Anywhere Else</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend')}}/images/blog-listing/blog_13.jpg" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-pink"><a href="#" class="white">Fashion</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title white">
                                    <a href="blog-details.html" class="white">Is the Natural Hair Movement Coming to an End?</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 mar-bottom-30">
                        <div class="blog-post_wrapper image-wrapper">
                            <div class="blog-post-image">
                                <img src="{{asset('frontend')}}/images/blog-listing/blog_15.jpg" alt="image" class="img-responsive center-block post_img" />
                            </div>
                            <div class="post-content">
                                <div class="post-category">
                                    <ul>
                                        <li class="cat-yellow"><a href="#" class="white">Popular</a></li>
                                    </ul>
                                </div>
                                <div class="post-date">
                                    <p><a href="#">15th August 2019</a></p>
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-details.html" class="white">Beauty is Gene Deep but give me those little imperfections Going</a>
                                </h2>
                                <div class="item-meta white">
                                    <span>by</span>
                                    <a class="author-name white" href="author.html">Admin Jackson</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="blog-button text-center">
                            <button class="btn-blog">Load More <i class="fa fa-angle-double-right"></i></button>
                        </div>    
                    </div>
                    
                </div>    
            </div>
        </div>
    </section>
    <!--* End Blog*-->

    <div class="mt_instagram">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend')}}/images/insta/insta_01.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend')}}/images/insta/insta_02.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend')}}/images/insta/insta_03.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend')}}/images/insta/insta_04.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend')}}/images/insta/insta_05.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend')}}/images/insta/insta_06.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend')}}/images/insta/insta_07.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend')}}/images/insta/insta_08.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend')}}/images/insta/insta_09.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend')}}/images/insta/insta_10.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend')}}/images/insta/insta_11.jpg" alt="Image"></a></div>
                <div class="col-sm-2 col-xs-6"><a href="#"><img src="{{asset('frontend')}}/images/insta/insta_12.jpg" alt="Image"></a></div>
            </div>
            <div class="sectio-title">
                <h3 class="mar-0"><a href="#">Follow @ Instagram</a></h3>
            </div>
        </div> 
    </div>

@endsection