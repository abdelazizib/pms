<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Test">
    <title>@yield('title','Blank') Page</title>
    <link rel="stylesheet" href="{{asset('content/css/vendor/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('content/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('content/css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('content/css/vendor/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="{{asset('content/css/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('content/css/main-ltr.css')}}">
    <link rel="stylesheet" href="{{asset('content/css/custom.css')}}">
    @yield('cssfile')
  </head>
  <body> 
      <!-- Start Navbar -->
    @include('front.layout.inc.navbar')
    <!-- End Navbar -->
    @if(!Request::is('/'))
    @include('front.layout.inc.headpage')
    @endif
    @yield('content')

    <div class="btn-top d-none">
      <a href="#"> 
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </a>
  </div>
    
    <!-- Start Footer-->
    @include('front.layout.inc.footer')
    <!-- End Footer-->
    
  </body>
</html>