@extends('front.index')
<title>The Potrikar Pata-{{ ucfirst(strtolower(str_replace(' ','_',$singlenews->title))) }}</title>
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>
@section('content')
<div class="blog-area section-padding-0-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">

                    <!-- Single Featured Post -->
                    <div class="single-blog-post featured-post single-post">
                        <div class="post-thumb">
                            <a href="news/{!! strtolower($singlenews->category_name)!!}/{{ strtolower(str_replace(' ','_',$singlenews->title)) }}/{{ $singlenews->id }}"><img src="{{ asset('images/thumbnail/') }}/{{$singlenews->image}}" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">{!! strtoupper($singlenews->category_name)!!}</a>
                            <a href="#" class="post-title">
                                <h6>{!! $singlenews->title !!}</h6>
                            </a>
                            <div class="post-meta">
                                <p class="post-author">By <a href="#"></a></p>
                                <p>{!! nl2br($singlenews->description) !!}</p>
                                <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                    <!-- Tags -->
                                    <div class="newspaper-tags d-flex">
                                        <span>Tags:</span>
                                        <ul class="d-flex">
                                            <li><a href="#">finacial,</a></li>
                                            <li><a href="#">politics,</a></li>
                                            <li><a href="#">stock market</a></li>
                                        </ul>
                                    </div>

                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center post-like--comments">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt="">
                                            <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt="">
                                            <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- About Author -->
                    <div class="blog-post-author d-flex">
                        <div class="author-thumbnail">
                            <img src="img/bg-img/32.jpg" alt="">
                        </div>
                        <div class="author-info">
                            <a href="#" class="author-name">James Smith, <span>The Author</span></a>
                            <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi.
                                Sed pellen tesque lectus et accu msan aliquam. Fusce lobortis cursus quam, id mattis
                                sapien.</p>
                        </div>
                    </div>

                    <div class="pager d-flex align-items-center justify-content-between">
                        <div class="prev">
                            <a href="#" class="active"><i class="fa fa-angle-left"></i> previous</a>
                        </div>
                        <div class="next">
                            <a href="#">Next <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- Comment Area Start -->
                    <div class="post-a-comment-area section-padding-80-0">
                        <h4> {{ $singlenews->comments()->count() }} Comments</h4>

                        @include('front.partials.comment_replies', ['comments' => $singlenews->comments, 'news_id' => $singlenews->id])
                        <h3>Do you have any comment about this news?</h3>
                        <div class="contact-form-area">
                            <form action="{{ route('comment.add') }}" method="post">
                             @csrf
                                <div class="row">                      
                                    <div class="col-12">
                                        <textarea name="comment_body" class="form-control" id="message" cols="20" rows="10"
                                            placeholder="Post Your Commner Here"></textarea>
                                        <input type="hidden" name="news_id" value="{{ $singlenews->id }}" />
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-success" type="submit">Add Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="blog-sidebar-area">

                    <!-- Latest Posts Widget -->
                    <div class="latest-posts-widget mb-50">

                       

                        @foreach ($news as $key => $ne)
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                        <a href="#"><img src="{{ asset('images/thumbnail/') }}/{{$ne->image}}" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="{!! strtolower($news[$key]->category_name)!!}" class="post-catagory">{!! $news[$key]->category_name !!}</a>
                        <div class="post-meta">
                            <a href="news/{!! strtolower($news[$key]->category_name)!!}/{{ strtolower(str_replace(' ','_',$ne->title)) }}/{{ $ne->id }}" class="post-title">
                                <h6>{{ $ne->title }}</h6>
                            </a>
                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                        </div>
                    </div>
                </div>
                @endforeach


                    </div>
                </div>

                <!-- Popular News Widget -->
                <div class="popular-news-widget mb-50">
                    <h3>4 Most Popular News</h3>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio
                                sodales.</h6>
                        </a>
                        <p>April 14, 2018</p>
                    </div>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales
                                placer.</h6>
                        </a>
                        <p>April 14, 2018</p>
                    </div>

                    <!-- Single Popular Blog -->
                    <div class="single-popular-post">
                        <a href="#">
                            <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed
                                varius leo.</h6>
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
