@extends('front.index')

@section('content')
<div class="blog-area section-padding-0-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">

                    <!-- Single Featured Post -->
                    @foreach ($news as $ne)
                    <div class="single-blog-post featured-post mb-30">
                        <div class="post-thumb">
                            <a href="{{ $category_name }}/{{ strtolower(str_replace(' ','_',$ne->title)) }}/{{ $ne->id }}"><img src="{{ asset('images/thumbnail/') }}/{{$ne->image}}" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">{{ $category_name }}</a>
                            <a href="#" class="post-title">
                                <h6>{!! $ne->title !!}</h6>
                            </a>
                            <div class="post-meta">
                                <p class="post-author">By <a href="#">Mizanur Rahman</a></p>
                                <p class="post-excerp">{!! nl2br($ne->description) !!} </p>
                                <!-- Post Like & Post Comment -->
                                <div class="d-flex align-items-center">
                                    <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                    <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                    <!-- Single Featured Post -->
                    

                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination mt-50">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-12 col-lg-4">
                <div class="blog-sidebar-area">

                    <!-- Latest Posts Widget -->
                    <div class="latest-posts-widget mb-50">

                        <!-- Single Featured Post -->
                        <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/19.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                    </a>
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Featured Post -->
                        <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/20.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Politics</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>
                                    </a>
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Featured Post -->
                        <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/21.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Health</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                    </a>
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Featured Post -->
                        <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/22.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                    </a>
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Featured Post -->
                        <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Travel</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                    </a>
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Featured Post -->
                        <div class="single-blog-post small-featured-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Politics</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                    </a>
                                    <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Popular News Widget -->
                    <div class="popular-news-widget mb-50">
                        <h3>4 Most Popular News</h3>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales.</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo.</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>
                    </div>

                    <!-- Newsletter Widget -->
                    <div class="newsletter-widget mb-50">
                        <h4>Newsletter</h4>
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <form action="#" method="post">
                            <input type="text" name="text" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                            <button type="submit" class="btn w-100">Subscribe</button>
                        </form>
                    </div>

                    <!-- Latest Comments Widget -->
                    <div class="latest-comments-widget">
                        <h3>Latest Comments</h3>

                        <!-- Single Comments -->
                        <div class="single-comments d-flex">
                            <div class="comments-thumbnail mr-15">
                                <img src="img/bg-img/29.jpg" alt="">
                            </div>
                            <div class="comments-text">
                                <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                <p>06:34 am, April 14, 2018</p>
                            </div>
                        </div>

                        <!-- Single Comments -->
                        <div class="single-comments d-flex">
                            <div class="comments-thumbnail mr-15">
                                <img src="img/bg-img/30.jpg" alt="">
                            </div>
                            <div class="comments-text">
                                <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                <p>06:34 am, April 14, 2018</p>
                            </div>
                        </div>

                        <!-- Single Comments -->
                        <div class="single-comments d-flex">
                            <div class="comments-thumbnail mr-15">
                                <img src="img/bg-img/31.jpg" alt="">
                            </div>
                            <div class="comments-text">
                                <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                <p>06:34 am, April 14, 2018</p>
                            </div>
                        </div>

                        <!-- Single Comments -->
                        <div class="single-comments d-flex">
                            <div class="comments-thumbnail mr-15">
                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="comments-text">
                                <a href="#">Jamie Smith <span>on</span> Facebook is offering facial recognition...</a>
                                <p>06:34 am, April 14, 2018</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">

    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-widget-area mt-80">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="mailto:contact@youremail.com">contact@youremail.com</a></li>
                            <li><a href="tel:+4352782883884">+43 5278 2883 884</a></li>
                            <li><a href="http://yoursitename.com">www.yoursitename.com</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Politics</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Markets</a></li>
                            <li><a href="#">Tech</a></li>
                            <li><a href="#">Luxury</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">Featured</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Football</a></li>
                            <li><a href="#">Golf</a></li>
                            <li><a href="#">Tennis</a></li>
                            <li><a href="#">Motorsport</a></li>
                            <li><a href="#">Horseracing</a></li>
                            <li><a href="#">Equestrian</a></li>
                            <li><a href="#">Sailing</a></li>
                            <li><a href="#">Skiing</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">FAQ</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Aviation</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Traveller</a></li>
                            <li><a href="#">Destinations</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Food/Drink</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Partner Hotels</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-lg-2">
                    <div class="footer-widget-area mt-80">
                        <!-- Title -->
                        <h4 class="widget-title">+More</h4>
                        <!-- List -->
                        <ul class="list">
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Arts</a></li>
                            <li><a href="#">Autos</a></li>
                            <li><a href="#">Luxury</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection