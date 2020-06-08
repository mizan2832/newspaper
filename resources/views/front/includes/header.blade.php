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
                                    <a href="index.html"><img src="{{ asset('front/img/core-img/logo.png') }}" alt=""></a>
                                </div>
    
                                <!-- Login Search Area -->
                                <div class="login-search-area d-flex align-items-center">
                                    <!-- Login -->
                                    <div class="login d-flex">
                                    
                                        <a href=""></a>
                                        <a href=""></a>
                                    </div>
                                    <!-- Search Form -->
                                    <div class="search-form">
                                        <form action="#" method="post">
                                            <input type="search" name="search" class="form-control" placeholder="Search">
                                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i>  </button>
                                        </form>
                                    </div>

                                    {{-- <div class="dropdown">
                                            <img src="{{ asset('front/img/noimage.png') }}" style="margin-left:30px;" width="40" height="40" alt="">
                                        <div class="dropdown-content">
                                             <a href="{{ route('login') }}">Login</a>
                                             <a href="{{ route('register') }}">Register</a>
                                        </div>
                                    </div> --}}

                                    <div class="dropdown">
                                            
                                            <img src="{{ asset('front/img/noimage.png') }}"  style="margin-left:30px;" onclick="myFunction()" class="dropbtn" width="40" height="40" alt="">
                                            <div id="myDropdown" class="dropdown-content">
                                            @if (Auth::user())
                                            <p style="margin-bottom:-15px;"><img src="{{ asset('front/img/noimage.png') }}" alt="" width="20" height="20"><b>{{ Auth::user()->name }}<b></p>
                                            <a href="/logout">Logout</a>
                                                
                                            @else
                                            <a href="{{ route('login') }}">Login</a>
                                            <a href="{{ route('register') }}">Register</a>
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
                                <li><a href="/{{ strtolower($category->name) }}">{{ $category->name }}</a></li>
                            @endforeach

                            <li><a href="#">সব</a>
                                
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