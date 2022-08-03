@extends('front.layout.app')
@section('title',dataJson()['reservation']['page-name'])
@section('content')
    <!-- Start Main Header Page -->
    @section('pagename',dataJson()['reservation']['page-name'])
    
    <!-- End Main Header Page -->
    <section class="section-about pt-0">
      <div class="container">
        <div class="main__form p-lg-5 py-5 px-3 main-bg h-100 d-flex flex-column justify-content-center"> 
          <h4 class="main__form-title mb-4 text-uppercase">BOOK YOUR TABLE</h4>
          <form class="cmxform" id="main-form" method="POST" action="{{route('reservation.store')}}">
            @csrf
            <div class="row"> 
              <div class="col-lg-4 col-md-6">
                <div class="form-group wow animate__fadeInDown" data-wow-duration=".8s">
                  <input class="border w-100 mb-3 px-3 py-2 form-control @error('name') error @enderror " id="cname" type="text" value="{{old('name')}}" placeholder="Name" name="name" minlength="2" required>
                  <label id="cphone-error" class="error" for="cname">@error('name') {{$errors->$messages->$phone }} @enderror</label>
               
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="form-group wow animate__fadeInDown" data-wow-duration="1.2s">
                  <input class="border w-100 mb-3 px-3 py-2 form-control @error('email') error @enderror " id="cemail" type="email" value="{{old('email')}}" placeholder="Email" name="email" required>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="form-group wow animate__fadeInDown" data-wow-duration="1.5s">
                  <input class="border w-100 mb-3 px-3 py-2 form-control @error('phone') error @enderror " id="cphone" type="tel" value="{{old('phone')}}" placeholder="Phone" name="phone" required>
                  <label id="cphone-error" class="error" for="cphone">@error('phone') {{$errors->$messages->$phone }} @enderror</label>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="form-group wow animate__fadeInDown" data-wow-duration="1.8s">
                  <label for="cdate"> <span class="main__from-icon"><i class="fa fa-calendar" aria-hidden="true"></i></span></label>
                  <input class="border w-100 mb-3 px-3 py-2 form-control @error('date') error @enderror " type="date" id="cdate" value="{{old('date')}}" name="date" required>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="form-group wow animate__fadeInDown" data-wow-duration="2s">
                  <label for=""> <span class="main__from-icon"><i class="fa fa-clock" aria-hidden="true"></i></span></label>
                  <input class="border w-100 mb-3 px-3 py-2 form-control @error('time') error @enderror " type="time" value="{{old('time')}}" name="time">
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="form-group wow animate__fadeInDown" data-wow-duration="2.3s">
                  <label for="cguest"><span class="main__from-icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span></label>
                  <select class="form-select w-100 mb-3 px-3 py-2 wow animate__fadeInDown" id="cguest" name="guest" required data-wow-duration="2.5s">
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
    <!-- Start Ingredients-->
    <section class="section-ingredients"> 
      <div class="container"> 
        <div class="row"> 
          <div class="col-lg-6">
            <div class="row"> 
              <div class="col-6"><img class="ingredients__img" src="content/assets/images/chef/chef-1.webp" alt="img-chef"></div>
              <div class="col-6"><img class="ingredients__img" src="content/assets/images/header/wallpaper3.webp" alt="img-chef"></div>
            </div>
          </div>
          <div class="col-lg-6 p-lg-5 py-5 px-3">
            <div class="main-title mt-5 mb-4">
              <h3 class="title__text" data-title="This is our secrets">Perfect Ingredients</h3>
            </div>
            <p class="ingredients__desc mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p><a class="btn main-btn" href="#">Learn more </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Ingredients-->
@endsection