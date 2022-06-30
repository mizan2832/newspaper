<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
        <!-- Title -->
        <title>@yield('title')</title>
    
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('front/img/core-img/favicon.ico') }} ">
        <link rel="stylesheet" href="{{ asset('front/fontawesome/css/fontawesome.min.css') }} ">

        @stack('styles')
        <!-- Core Stylesheet -->
        <link rel="stylesheet" href="{{ asset('front/style.css') }} ">
    
    </head>
    
    <body>
        <!-- ##### Header Area Start ##### -->
        <header class="header-area">
    
            <!-- Top Header Area -->
            <div class="top-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="top-header-content d-flex align-items-center justify-content-between">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="/"><img src="{{ asset('front/img/core-img/logo.png') }}" alt=""></a>
                                </div>
    
                                <!-- Login Search Area -->
                                <div class="login-search-area d-flex align-items-center">
                                    <!-- Login -->
                                    <div class="login d-flex">
                                    
                                        <a href=""></a>
                                        <a href=""></a>
                                    </div>
                                    <!-- Search Form -->
                                    <div class="search-form" >
                                        <form action="{{ route('search') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="text" name="search" class="form-control" placeholder="Search" style="">
                                            <button name="submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i>  </button>
                                        </form>
                                    </div>

                                    <div class="dropdown">
                                        @if ((Auth::check() &&Auth::user()->role->id == 2) || (Auth::check() &&Auth::user()->role->id == 3) )
                                            <img src="{{ asset('front/img/noimage.jpg') }}"  style="margin-left:30px;" onclick="myFunction()" class="dropbtn rounded-circle" width="40" height="40" alt="">
                                        @else
                                            <img src="{{ asset('front/img/noimag.png') }}"  style="margin-left:30px;" onclick="myFunction()" class="dropbtn rounded-circle" width="40" height="40" alt="">
                                        @endif
                                            <div id="myDropdown" class="dropdown-content">
                                            @if (Auth::user())
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i class="fa fa-envelope"></i>Logout</a> 
                                                
                                                <form id="logout-form"  action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                      </form>  
 
                                            @else
                                            <a href="{{ route('login') }}">Login</a>
                                            @if ((Auth::check() && Auth::user()->role->id == 3))
                                                <a href="{{ route('register') }}">Register</a>
                                            @endif
                                            @endif
                                              
                                            </div>
                                          </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<div class="newspaper-main-menu" id="stickyMenu">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="newspaperNav">

                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('front/img/core-img/logo.png') }} " alt=""></a>
                </div>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            @foreach ($categories as $category)
                                @if ($category->name=='breaking')
                                    @php
                                        continue
                                    @endphp
                                @endif
                                <li><a href="/news/{{ strtolower($category->name) }}">{{ $category->name }}</a></li>
                                
                            @endforeach

                            <li><a href="#">More</a>
                                
                            </li>


                          

                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>
</header>
<!-- ##### Header Area End ##### -->