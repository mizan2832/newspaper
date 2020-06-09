@extends('front.index')
@section('title','The Daily NEWS')
@section('content')

<div class="featured-post-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
                <div class="row">

                    <!-- Single Featured Post -->
                  @foreach ($news as $key => $ne)
                    <div class="col-12 col-lg-6">
                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                                <a href="#"><img src="{{ asset('images/thumbnail/') }}/{{$ne->image}}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="{!! strtolower($news[$key]->category_name)!!}" class="post-catagory">{!! $news[$key]->category_name !!}</a>
                                <div class="post-meta">
                                    <a href="news/{!! strtolower($news[$key]->category_name)!!}/{{ strtolower(str_replace(' ','_',$ne->title)) }}/{{ $ne->id }}" class="post-title">
                                        <h6>{{ $ne->title }}</h6>
                                    </a>
                                    <p><b>{!! substr(nl2br($ne->description),0,100) !!}</b></p>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-like"><img
                                                src=" {{ asset('front/img/core-img/like.png') }}" alt="">
                                            <span>392</span></a>
                                        <a href="#" class="post-comment"><img
                                                src=" {{ asset('front/img/core-img/chat.png') }}" alt="">
                                            <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @if ($key==3)
                        @break
                    @endif
                    @endforeach
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single  Post -->

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
                            <p class="post-date"><span>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ne->created_at)->format('g:iA') }}
                            </span> | {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ne->created_at)->format('F,Y') }} <span></span></p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Single  Post End-->


               
            
            </div>
        </div>
    </div>
</div>
<!-- ##### Featured Post Area End ##### -->

<!-- ##### Popular News Area Start ##### -->
<div class="popular-news-area section-padding-80-50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="section-heading">
                    <h6>Popular News</h6>
                </div>

                <div class="row">

                    <!-- Single Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <div class="post-thumb">
                                <a href="#"><img src=" {{ asset('front/img/bg-img/12.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <a href="#" class="post-title">
                                    <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio
                                        sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <div class="post-meta d-flex align-items-center">
                                    <a href="#" class="post-like"><img src=" {{ asset('front/img/core-img/like.png') }}"
                                            alt="">
                                        <span>392</span></a>
                                    <a href="#" class="post-comment"><img
                                            src=" {{ asset('front/img/core-img/chat.png') }}" alt="">
                                        <span>10</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <div class="post-thumb">
                                <a href="#"><img src=" {{ asset('front/img/bg-img/13.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <a href="#" class="post-title">
                                    <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio
                                        sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <div class="post-meta d-flex align-items-center">
                                    <a href="#" class="post-like"><img src=" {{ asset('front/img/core-img/like.png') }}"
                                            alt="">
                                        <span>392</span></a>
                                    <a href="#" class="post-comment"><img
                                            src=" {{ asset('front/img/core-img/chat.png') }}" alt="">
                                        <span>10</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <div class="post-thumb">
                                <a href="#"><img src=" {{ asset('front/img/bg-img/14.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <a href="#" class="post-title">
                                    <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio
                                        sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <div class="post-meta d-flex align-items-center">
                                    <a href="#" class="post-like"><img src=" {{ asset('front/img/core-img/like.png') }}"
                                            alt="">
                                        <span>392</span></a>
                                    <a href="#" class="post-comment"><img
                                            src=" {{ asset('front/img/core-img/chat.png') }}" alt="">
                                        <span>10</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-blog-post style-3">
                            <div class="post-thumb">
                                <a href="#"><img src=" {{ asset('front/img/bg-img/15.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">Finance</a>
                                <a href="#" class="post-title">
                                    <h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio
                                        sodales placer. Sed varius leo ac...</h6>
                                </a>
                                <div class="post-meta d-flex align-items-center">
                                    <a href="#" class="post-like"><img src=" {{ asset('front/img/core-img/like.png') }}"
                                            alt="">
                                        <span>392</span></a>
                                    <a href="#" class="post-comment"><img
                                            src=" {{ asset('front/img/core-img/chat.png') }}" alt="">
                                        <span>10</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="section-heading">
                    <h6>Info</h6>
                </div>
                <!-- Popular News Widget -->
                <div class="popular-news-widget mb-30">
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
                <div class="newsletter-widget">
                    <h4>Newsletter</h4>
                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <form action="#" method="post">
                        <input type="text" name="text" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <button type="submit" class="btn w-100">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
        </script>
@endpush