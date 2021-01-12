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
                    @if (strtolower($news[$key]->category_name)=='breaking')
                        @php
                            continue
                        @endphp
                    @endif
                    <div class="col-12 col-lg-6">
                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                                <a href="/"><img src="{{ asset('images/thumbnail/') }}/{{$ne->image}}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="/news/{!! strtolower($news[$key]->category_name)!!}" class="post-catagory">{!! $news[$key]->category_name !!}</a>
                                <div class="post-meta">
                                    <a href="/details/{!! strtolower($news[$key]->category_name)!!}/{{ strtolower(str_replace(' ','_',$ne->title)) }}/{{ $ne->id }}" class="post-title">
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

                @if (strtolower($news[$key]->category_name)=='breaking')
                            @php
                                continue
                            @endphp
                @endif
                <div class="single-blog-post small-featured-post d-flex">
                    <div class="post-thumb">
                        <a href="#"><img src="{{ asset('images/thumbnail/') }}/{{$ne->image}}" alt=""></a>
                    </div>
                    <div class="post-data">
                        <a href="{!! strtolower($news[$key]->category_name)!!}" class="post-catagory">{!! $news[$key]->category_name !!}</a>
                        <div class="post-meta">
                            <a href="/details/{!! strtolower($news[$key]->category_name)!!}/{{ strtolower(str_replace(' ','_',$ne->title)) }}/{{ $ne->id }}" class="post-title">
                                <h6>{{ $ne->title }}</h6>
                            </a>
                            <p class="post-date"><span>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ne->created_at)->format('g:iA') }}
                            </span> | {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $ne->created_at)->format('F,Y') }} </p>
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
                
                <!-- Popular News Widget -->
                <div class="popular-news-widget mb-30">
                    <h3>4 Most Popular News</h3>

                    <!-- Single Popular Blog -->
                   
                    @foreach ($popularnews as $key => $popular)
                        
                    <div class="single-popular-post">
                        @if (strtolower($popularnews[$key]->category_name)=='breaking')
                            @php
                                continue
                            @endphp
                        @endif
                        <a href="/details/{!! strtolower($popularnews[$key]->category_name)!!}/{{ strtolower(str_replace(' ','_',$ne->title)) }}/{{ $ne->id }}">
                            <h6><span>{{ $loop->index+1 }}</span> {{ $popular->title }}</h6>
                        </a>
                        <p>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $popular->created_at)->format('F,Y') }}</p>
                    </div>
                    @endforeach

                    <!-- Single Popular Blog -->
                    
                </div>

                <!-- Newsletter Widget -->
                <div class="newsletter-widget">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <h4>Newsletter</h4>
                    <p class="text-green">Subcribe to get braking news in your email address.</p>
                    <form action="{{ route('subcribe.store') }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <input type="submit" class="btn w-100">
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