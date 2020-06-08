<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title') | NEWS PORTAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



  <link rel="stylesheet" href="{{ asset('css/bootstrapcss.css') }}">
  <link rel="stylesheet" href="{{ asset('css/stylelogin.css') }}">
  <link rel="stylesheet" href="{{ asset('css/loginsignup.css') }}">

</head>

<body>

  <div class="header">
    <div class="logo"></div>
    <div class="login"></div>
  </div>

  <br>

  <div class="container">
    @section('content')

    @endsection

    <div class="login-html">
      
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>

      <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="sign-in-htm">
            <div class="group">
              <label for="email" class="label">Email</label>
              <input id="email" name="email" type="email" type="text" class="input">
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="pass" type="password" name="password" class="input" data-type="password">
            </div>

            <div class="group">
              <input type="submit" class="button" value="Sign In">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
          </div>
        </form>
        <div class="sign-up-htm">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="group">
              <label for="name" class="label">Name</label>
              <input id="name" type="text" name="name" type="text" class="input">
            </div>
            <div class="group">
              <label for="email" class="label">Email Address</label>
              <input id="email" name="email" type="email" type="text" class="input">
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input id="pass" type="password" name="password" class="input" data-type="password">
            </div>
            <div class="group">
              <label for="pass" class="label">Confirm Password</label>
              <input id="pass" type="password" name="password_confirmation" class="input" data-type="password">
            </div>

            <div class="group">
              <input type="submit" class="button" value="Sign Up">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

  @stack('script')
</body>

</html>