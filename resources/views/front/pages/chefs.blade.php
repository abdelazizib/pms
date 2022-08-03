@extends('front.layout.app')
@section('title','Chefs')
@section('content')
    <!-- Start Main Header Page -->
    @section('pagename','Chefs')
    
    <!-- End Main Header Page -->
    <!-- Start Chef-->
    <section class="section-chef"> 
      <div class="main-title text-center center-title mb-5">
        <h3 class="title__text wow animate__backInDown" data-title="{{dataJson()['chefs']['master-chefs']['title']}}" data-wow-duration="1s"> {{dataJson()['chefs']['master-chefs']['header']}}</h3>
      </div>
      <div class="container"> 
        <div class="row"> 
          @foreach ($chefs as $chef)
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="chef__item"><img class="chef__item-img" src="{{asset('content/assets/images/chef/chef-'.rand(1,4).'.webp')}}" alt="img-staff">
              <div class="chef__item-information px-4 pb-4 pt-3">
                <h4 class="chef__item-name mb-2 wow animate__bounceInUp" data-wow-duration="1s"> {{$chef->name}}</h4><span class="chef__item-position">{{$chef->job}}</span>
                <p class="chef__item-desc mt-3 wow animate__bounceInUp" data-wow-duration="2s">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              </div>
            </div>
          </div>
          <!--End col-->
          @endforeach


          
        </div>
      </div>
    </section>
    <!-- End Chef-->
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
@endsection