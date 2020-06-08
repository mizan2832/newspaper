@extends('layouts.app')
@section('content')
<div class="top-bar">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-md-6 d-md-block d-none">
        <h3>POTRIKAR PATA</h3>
      </div>
      <div class="col-md-6">
        <div class="d-flex justify-content-md-end justify-content-between">
          <ul class="list-inline contact-info d-block d-md-none">
            <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
          </ul>
          <div class="login">
            @guest
            <a href="{{ route('login') }}" data-toggle="modal" data-target="#login-modal" class="login-btn"><i
                class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Sign In</span></a>
 
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="signup-btn"></i><span
                class="d-none d-md-inline-block">Sign Up</span></a></div>
          <ul class="social-custom list-inline">
            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
            @endif
            </li>
            @else
            <li style="text-deceration:none;" class="list-inline-item">{{  Auth::user()->name }}</li>
            <li class="list-inline-item"><a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i class="fa fa-envelope"></i>Logout</a> 
            <form  action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>  
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


@show