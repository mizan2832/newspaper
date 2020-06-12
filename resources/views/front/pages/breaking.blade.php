@if ($breaking->isNotEmpty())
<div class="hero-area">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center">
                    <div class="news-title">
                        <p>Breaking News</p>
                    </div>
                    <div id="breakingNewsTicker" class="ticker">
                        <ul>
                            @foreach ($breaking as $br)
                                <li><a href="/details/breaking/{{ strtolower(str_replace(' ','_',$br->title)) }}/{{ $br->id }}">{{ $br->title }}</a></li>     
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Breaking News Widget -->
                
            </div>

            <!-- Hero Add -->
            <div class="col-12 col-lg-4">
                <div class="hero-add">
                    <a href="#"><img src="{{ asset('front/img/bg-img/hero-add.gif') }} " alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
@else
    <div style="margin-bottom:10px;"></div>
@endif
