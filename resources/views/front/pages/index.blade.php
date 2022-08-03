@extends('front.layout.app')
@section('title','Home')

@section('content')
    <header class="main-header"> 
      <div class="owl-carousel owl-theme header__slider">
        <div class="item"> 
          <div class="header__item">
            <div class="header__item-content"><span class="text-uppercase">{{dataJson()['home']['slider']}}</span>
              <h1 class="my-4">Beat Quality</h1><span class="text-uppercase">FOOD</span>
            </div><img src="{{asset('content/assets/images/header/wallpaper1.webp')}}" alt="Bg-img">
          </div>
        </div>
        @foreach ($slider as $slide)
        <div class="item"> 
          <div class="header__item">
            <div class="header__item-content"><span class="text-uppercase">{{$slide->title}}</span>
              <h1 class="my-4">{{ Str::limit($slide->description ,30)}}</h1><span class="text-uppercase">1958</span>
            </div><img src="{{asset($slide->image)}}" alt="Bg-img">
          </div>
        </div>
        @endforeach
      
      </div>
    </header>
    <!-- Start About -->
    <section class="section-about py-0">
      <div class="container"> 
        <div class="row g-0"> 
          <div class="col-lg-4">
            <div class="main__form p-lg-5 px-3 py-5 main-bg h-100 d-flex flex-column justify-content-center"> 
              <h2 class="main__form-title mb-4 text-uppercase wow animate__fadeInDown" data-wow-duration=".5s">BOOK YOUR TABLE</h2>
              <form class="cmxform" id="main-form" method="get" action="">
                <div class="form-group wow animate__fadeInDown" data-wow-duration=".8s">
                  <input class="border w-100 mb-3 px-3 py-2 form-control" id="cname" type="text" placeholder="Name" name="name" minlength="2" required>
                </div>
                <div class="form-group wow animate__fadeInDown" data-wow-duration="1.2s">
                  <input class="border w-100 mb-3 px-3 py-2 form-control" id="cemail" type="email" placeholder="Email" name="email" required>
                </div>
                <div class="form-group wow animate__fadeInDown" data-wow-duration="1.5s">
                  <input class="border w-100 mb-3 px-3 py-2 form-control" id="cphone" type="tel" placeholder="Phone" name="phone" required>
                </div>
                <div class="form-group wow animate__fadeInDown" data-wow-duration="1.8s">
                  <label for="cdate"> <span class="main__from-icon"><i class="fa fa-calendar" aria-hidden="true"></i></span></label>
                  <input class="border w-100 mb-3 px-3 py-2 form-control" type="date" id="cdate" name="date" required>
                </div>
                <div class="form-group wow animate__fadeInDown" data-wow-duration="2s">
                  <label for=""> <span class="main__from-icon"><i class="fa fa-clock" aria-hidden="true"></i></span></label>
                  <input class="border w-100 mb-3 px-3 py-2 form-control" type="time" value="13:00" name="time">
                </div>
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
                <button class="btn main__form-btn w-100 py-3 wow animate__fadeInDown submit" type="submit" data-wow-duration="2.5s">Book Your Table Now</button>
              </form>
            </div>
            <!-- End Form About-->
          </div>
          <div class="col-lg-8">
            <div class="about__info p-lg-5 px-3 py-5 mt-5"> 
              <div class="main-title">
                <h3 class="title__text wow animate__backInDown" data-title="{{dataJson()['chefs']['chefs-about']['title']}}" data-wow-duration="1s">{{dataJson()['chefs']['chefs-about']['header']}}</h3>
                <p class="about__desc mt-4 wow animate__fadeInUp" data-wow-duration="1.5s">{{dataJson()['chefs']['chefs-about']['content']}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About -->
    <!-- Start Booking-->
    <section class="section-booking text-center d-flex flex-column justify-content-center algin-items-center px-3"><span class="wow animate__fadeInUp" data-wow-duration=".5s">{{dataJson()['home']['booking']['header']}}</span>
      <h3 class="section-booking__title mt-3 wow animate__fadeInUp" data-wow-duration="1.5s">{{dataJson()['home']['booking']['title']}}</h3>
    </section>
    <!-- Start Booking-->
    <!-- Start Menu-->
    <section class="section-menu"> 
      <div class="main-title text-center center-title">
        <h3 class="title__text mb-5 wow animate__backInDown" data-title="{{dataJson()['menu']['our-menu']['title']}}" data-wow-duration="1s"> {{dataJson()['menu']['our-menu']['header']}}</h3>
      </div>
      <div class="container"> 
        <div class="row">
        @foreach ($categories as $cat)
        @if ($cat->products->count() > 0)
          
        <div class="col-lg-4 col-md-6 mb-4">

            <div class="section-menu__item px-lg-4 px-2 py-5 d-flex flex-column">

              <h4 class="section-menu__item-title text-uppercase text-center mb-5">{{$cat->name}}</h4>
            @foreach ($cat->products as $product)
            <div class="section-menu__item-box d-flex">
                <img class="section-menu__item__img" src="content/assets/images/menu/breakfast-1.webp" alt="img-BREAKFAST">
                <div class="section-menu__item__desc">
                  <h5 class="section-menu__item__desc-title mb-2">{{$product->name}}<br>Source</h5>
                  <p>Meat, Potatoes, Rice, Tomatoe</p>
                </div>
                <h6 class="section-menu__item__price main-color">{{$product->price}} $</h6>
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
    <!-- Start Customer-->
    @include('front.layout.inc.reviews')
    <!-- End Customer-->
    <!-- Start Chef-->
    <section class="section-chef"> 
      <div class="main-title text-center center-title mb-5">
        <h3 class="title__text wow animate__backInDown" data-title="{{dataJson()['chefs']['master-chefs']['title']}}" data-wow-duration="1s"> {{dataJson()['chefs']['master-chefs']['header']}}</h3>
      </div>
      <div class="container"> 
        <div class="row"> 
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="chef__item"><img class="chef__item-img" src="{{asset('content/assets/images/chef/chef-1.webp')}}" alt="img-staff">
              <div class="chef__item-information px-4 pb-4 pt-3">
                <h4 class="chef__item-name mb-2 wow animate__bounceInUp" data-wow-duration="1s"> John Gustavo</h4><span class="chef__item-position">CEO, Co Founder</span>
                <p class="chef__item-desc mt-3 wow animate__bounceInUp" data-wow-duration="2s">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              </div>
            </div>
          </div>
          <!--End col-->
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="chef__item"><img class="chef__item-img" src="{{asset('content/assets/images/chef/chef-2.webp')}}" alt="img-staff">
              <div class="chef__item-information px-4 pb-4 pt-3">
                <h4 class="chef__item-name mb-2 wow animate__bounceInUp" data-wow-duration="1s"> Michelle Fraulen</h4><span class="chef__item-position">Head Chef</span>
                <p class="chef__item-desc mt-3 wow animate__bounceInUp" data-wow-duration="2s">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              </div>
            </div>
          </div>
          <!--End col-->
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="chef__item"><img class="chef__item-img" src="{{asset('content/assets/images/chef/chef-3.webp')}}" alt="img-staff">
              <div class="chef__item-information px-4 pb-4 pt-3">
                <h4 class="chef__item-name mb-2 wow animate__bounceInUp" data-wow-duration="1s"> Alfred Smith</h4><span class="chef__item-position">Chef Cook</span>
                <p class="chef__item-desc mt-3 wow animate__bounceInUp" data-wow-duration="2s">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              </div>
            </div>
          </div>
          <!--End col-->
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="chef__item"><img class="chef__item-img" src="{{asset('content/assets/images/chef/chef-4.webp')}}" alt="img-staff">
              <div class="chef__item-information px-4 pb-4 pt-3">
                <h4 class="chef__item-name mb-2 wow animate__bounceInUp" data-wow-duration="1s"> Antonio Santibanez</h4><span class="chef__item-position">Chef Cook</span>
                <p class="chef__item-desc mt-3 wow animate__bounceInUp" data-wow-duration="2s">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              </div>
            </div>
          </div>
          <!--End col-->
        </div>
      </div>
    </section>
    <!-- End Chef-->
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
    <!-- Start Blog-->
    <section class="section-blog"> 
      <div class="main-title text-center center-title mb-5">
        <h3 class="title__text wow animate__backInDown" data-title="{{dataJson()['blog']['recent-blog']['title']}}" data-wow-duration="1s"> {{dataJson()['blog']['recent-blog']['header']}}</h3>
      </div>
      <div class="container"> 
        <div class="row"> 
          <div class="col-lg-4 mb-4">
            <div class="blog__item"><img class="blog__item-img wow animate__bounceInDown" src="{{asset('content/assets/images/blog/blog-1.webp')}}" alt="img-blog" data-wow-duration="1s">
              <div class="blog__item-information p-4"><span class="blog__item-information-date text-uppercase wow animate__bounceInUp" data-wow-duration=".5s"> AUGUST 3, 2020 ADMIN</span>
                <p class="my-3 blog__item-information-desc wow animate__bounceInUp" data-wow-duration="1s"> Even the all-powerful Pointing has no control about the blind texts</p>
                <div class="d-flex justify-content-between align-items-center"><a class="btn main-btn wow animate__bounceInUp" href="#" data-wow-duration="1.5s"> Read more</a>
                  <div class="blog__item-information-comment wow animate__bounceInUp" data-wow-duration="2s"> <span class="blog__item-information-icon me-1"> <i class="fa fa-comment" aria-hidden="true"></i></span><span>3</span></div>
                </div>
              </div>
            </div>
          </div>
          <!-- End col-->
          <div class="col-lg-4 mb-4">
            <div class="blog__item"><img class="blog__item-img wow animate__bounceInDown" src="{{asset('content/assets/images/blog/blog-2.webp')}}" alt="img-blog" data-wow-duration="1s">
              <div class="blog__item-information p-4"><span class="blog__item-information-date text-uppercase wow animate__bounceInUp" data-wow-duration=".5s"> AUGUST 3, 2020 ADMIN</span>
                <p class="my-3 blog__item-information-desc wow animate__bounceInUp" data-wow-duration="1s"> Even the all-powerful Pointing has no control about the blind texts</p>
                <div class="d-flex justify-content-between align-items-center"><a class="btn main-btn wow animate__bounceInUp" href="#" data-wow-duration="1.5s"> Read more</a>
                  <div class="blog__item-information-comment wow animate__bounceInUp" data-wow-duration="2s"> <span class="blog__item-information-icon me-1"> <i class="fa fa-comment" aria-hidden="true"></i></span><span>3</span></div>
                </div>
              </div>
            </div>
          </div>
          <!-- End col-->
          <div class="col-lg-4 mb-4">
            <div class="blog__item"><img class="blog__item-img wow animate__bounceInDown" src="{{asset('content/assets/images/blog/blog-3.webp')}}" alt="img-blog" data-wow-duration="1s">
              <div class="blog__item-information p-4"><span class="blog__item-information-date text-uppercase wow animate__bounceInUp" data-wow-duration=".5s"> AUGUST 3, 2020 ADMIN</span>
                <p class="my-3 blog__item-information-desc wow animate__bounceInUp" data-wow-duration="1s"> Even the all-powerful Pointing has no control about the blind texts</p>
                <div class="d-flex justify-content-between align-items-center"><a class="btn main-btn wow animate__bounceInUp" href="#" data-wow-duration="1.5s"> Read more</a>
                  <div class="blog__item-information-comment wow animate__bounceInUp" data-wow-duration="2s"> <span class="blog__item-information-icon me-1"> <i class="fa fa-comment" aria-hidden="true"></i></span><span>3</span></div>
                </div>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </section>
    <!-- End Blog-->
    <!-- Start Booking-->
    <section class="section-book-now text-center d-flex flex-column justify-content-center algin-items-center main-bg py-5">
      <div class="container">
        <h3 class="book-now__title mb-3 wow animate__bounceInDown" data-wow-duration="1s"> {{dataJson()['about']['slogan']['title']}}</h3>
        <button class="book-now__btn btn px-3 py-2 wow animate__bounceInUp" type="submit" data-wow-duration="2s"> {{dataJson()['about']['slogan']['button']}} </button>
      </div>
    </section>
    <!-- Start Booking-->
@endsection