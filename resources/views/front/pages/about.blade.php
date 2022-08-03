@extends('front.layout.app')
@section('title','About')
@section('content')
<!-- Start Main Header Page -->
@section('pagename',dataJson()['about']['page-name'])

<!-- End Main Header Page -->

<!-- Start Ingredients-->
<section class="section-ingredients p-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-6 mb-3 mb-lg-0"><img class="ingredients__img wow animate__zoomIn" src="{{asset('content/assets/images/chef/chef-1.webp')}}" alt="img-chef" data-wow-duration="1s"></div>
          <div class="col-lg-6"><img class="ingredients__img wow animate__zoomIn" src="{{asset('content/assets/images/header/wallpaper3.webp')}}" alt="img-chef" data-wow-duration="1.5s"></div>
        </div>
      </div>
      <div class="col-lg-6 p-lg-5 px-3 py-5">
        <div class="main-title mt-5 mb-4">
          <h3 class="title__text wow animate__backInDown" data-title="{{dataJson()['common']['perfect-ingredients']['title']}}" data-wow-duration="1s"> {{dataJson()['common']['perfect-ingredients']['header']}}</h3>
        </div>
        <p class="ingredients__desc mb-4 wow animate__fadeInUp" data-wow-duration="1s">{{dataJson()['common']['perfect-ingredients']['content']}}</p><a class="btn main-btn wow animate__fadeInUp" href="#" data-wow-duration="2s">{{dataJson()['common']['perfect-ingredients']['button']}} </a>
      </div>
    </div>
  </div>
</section>
<!-- End Ingredients-->
<!-- Start About Page -->
<section class="page-about">
  <div class="container">
    <div class="row">
      @foreach (dataJson()['about']['counter'] as $key => $value)

      <div class="col-lg-3">
        <div class="about__counter text-center">
          <h4 class="about__counter-title mb-3">{{$value}}</h4><span class="about__counter-desc">{{ucwords(str_replace('-',' ',$key))}}</span>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
<!-- End About Page -->
<!-- Start Booking-->
<section class="section-book-now text-center d-flex flex-column justify-content-center algin-items-center main-bg py-5">
  <div class="container">
    <h3 class="book-now__title mb-3 wow animate__bounceInDown" data-wow-duration="1s"> {{dataJson()['about']['slogan']['title']}}</h3>
    <button class="book-now__btn btn px-3 py-2 wow animate__bounceInUp" type="submit" data-wow-duration="2s"> {{dataJson()['about']['slogan']['button']}} </button>
  </div>
</section>
<!-- Start Booking-->

<!-- Start Customer-->
@include('front.layout.inc.reviews')
<!-- End Customer-->
@endsection