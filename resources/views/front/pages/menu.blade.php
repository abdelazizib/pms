@extends('front.layout.app')
@section('title',dataJson()['menu']['page-name'])
@section('content')
    <!-- Start Main Header Page -->
    @section('pagename',dataJson()['menu']['page-name'])
    
    <!-- End Main Header Page -->



<!-- Start Menu-->
 <section class="section-menu"> 
      <div class="main-title text-center center-title">
        <h3 class="title__text mb-5" data-title="{{dataJson()['menu']['our-menu']['title']}}" data-wow-duration="1s"> {{dataJson()['menu']['our-menu']['header']}}</h3>
      </div>
      <div class="container"> 
        <div class="row">
        @foreach ($categories as $cat)
        @if ($cat->products->count() > 0)
          
        <div class="col-lg-4 col-md-6 mb-4">

            <div class="section-menu__item px-lg-4 px-2 pt-5 pb-2 d-flex flex-column">

              <h4 class="section-menu__item-title text-uppercase text-center mb-5">{{$cat->name}}</h4>
            @foreach ($cat->products as $product)
            <div class="section-menu__item-box d-flex">
                <img class="section-menu__item__img" src="content/assets/images/menu/breakfast-1.webp" alt="img-BREAKFAST">
                <div class="section-menu__item__desc">
                  <h5 class="section-menu__item__desc-title mb-2">{{$product->name}}<br>Source</h5>
                  <p>Meat, Potatoes, Rice, Tomatoe</p>
                </div>
                <h6 class="section-menu__item__price main-color">
                  
                <form class="addcart_data">
                  @csrf
                  <input type="hidden" name="id" value="{{
                    Crypt::encryptString($product->id)
                    }}">
                <button type="submit" class="btn add_cart_buy_btn">
                  
                  
                <span class="buy_btn">
                  @isset($cartItems[$product->id])
                  +1
                  @else
                  <i class="fa fa-shopping-cart"></i>
                  @endisset

                </span>
                </button>
                </form>
                {{$product->price}}$</h6>
              </div>
              @endforeach
            </div>
            <!-- End col-->
          </div>
        @endif
          @endforeach 
        </div>
        <!-- End Row-->
      </div>
    </section>
    <!-- End Menu-->
    <section class="section-about">
      <div class="main__form p-5 main-bg h-100 d-flex flex-column justify-content-center"> 
        <div class="container">
          <h4 class="main__form-title mb-4 text-uppercase">BOOK YOUR TABLE</h4>
          <form class="cmxform" id="main-form" method="get" action="">
            <div class="row"> 
              <div class="col-lg-4 col-md-6">
                <div class="form-group wow animate__fadeInDown" data-wow-duration=".8s">
                  <input class="border w-100 mb-3 px-3 py-2 form-control" id="cname" type="text" placeholder="Name" name="name" minlength="2" required>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="form-group wow animate__fadeInDown" data-wow-duration="1.2s">
                  <input class="border w-100 mb-3 px-3 py-2 form-control" id="cemail" type="email" placeholder="Email" name="email" required>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="form-group wow animate__fadeInDown" data-wow-duration="1.5s">
                  <input class="border w-100 mb-3 px-3 py-2 form-control" id="cphone" type="tel" placeholder="Phone" name="phone" required>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="form-group wow animate__fadeInDown" data-wow-duration="1.8s">
                  <label for="cdate"> <span class="main__from-icon"><i class="fa fa-calendar" aria-hidden="true"></i></span></label>
                  <input class="border w-100 mb-3 px-3 py-2 form-control" type="date" id="cdate" name="date" required>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="form-group wow animate__fadeInDown" data-wow-duration="2s">
                  <label for=""> <span class="main__from-icon"><i class="fa fa-clock" aria-hidden="true"></i></span></label>
                  <input class="border w-100 mb-3 px-3 py-2 form-control" type="time" value="13:00" name="time">
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="form-group wow animate__fadeInDown" data-wow-duration="2.3s">
                  <label for="cguest"><span class="main__from-icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span></label>
                  <select class="form-select w-100 mb-3 px-3 py-2 wow animate__fadeInDown" id="cguest" name="select" required data-wow-duration="2.5s">
                    <option selected disabled>Guest</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
              <div class="col mx-auto text-center">
                <button class="btn main__form-btn py-3 px-lg-5 wow animate__fadeInDown submit" type="submit" data-wow-duration="2.5s">Book Your Table Now</button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Form About-->
      </div>
    </section>
    @section('jsfiles')
    @include('front.js.ajax.cart.add_to_cart_ajax')
    @endsection
@endsection