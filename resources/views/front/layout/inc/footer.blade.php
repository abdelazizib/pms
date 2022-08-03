<footer class="main-footer py-5"> 
      <div class="container"> 
        <div class="row"> 
          <div class="col-lg-3 col-md-6 mb-3">
            <div class="footer__content"> 
              <h3 class="footer__title text-uppercase mb-4">{!!dataJson()['common']['logo']!!}</h3>
              <p class="footer__desc mb-3">{{dataJson()['common']['footer']['footer-about']['content']}}</p>
              <ul class="footer__sochial d-flex mt-3">
                <li> <a href="{{dataJson()['common']['nav']['social']['twitter']}}" tabindex="-1" aria-label="icon"> <i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li> <a href="{{dataJson()['common']['nav']['social']['face']}}" tabindex="-1" aria-label="icon"> <i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li> <a href="{{dataJson()['common']['nav']['social']['instagram']}}" tabindex="-1" aria-label="icon"> <i class="fab fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3">
            <div class="footer__content"> 
              <h3 class="footer__title text-uppercase mb-4">{{dataJson()['common']['footer']['openhours_title']}}</h3>
              <ul class="footer__lsit-time"> 
                @foreach (dataJson()['common']['footer']['open-hours'] as $day => $time)

                <li class="d-flex mb-1"> <span>{{ucfirst($day)}}</span><span>{{$time}}</span></li>
                  
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3">
            <div class="footer__content"> 
              <h3 class="footer__title text-uppercase mb-4">  INSTAGRAM</h3>
              <div class="footer__list-imgs">
                <div class="row g-0">
                  <div class="col-4"><a class="bg-one d-block" href="#" tabindex="-1" aria-label="bg-image"></a></div>
                  <div class="col-4"><a class="bg-tow d-block" href="#" tabindex="-1" aria-label="bg-image"></a></div>
                  <div class="col-4"><a class="bg-three d-block" href="#" tabindex="-1" aria-label="bg-image"></a></div>
                  <div class="col-4"><a class="bg-four d-block" href="#" tabindex="-1" aria-label="bg-image"></a></div>
                  <div class="col-4"><a class="bg-five d-block" href="#" tabindex="-1" aria-label="bg-image"></a></div>
                  <div class="col-4"><a class="bg-six d-block" href="#" tabindex="-1" aria-label="bg-image"></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-3">
            <div class="footer__content"> 
              <h3 class="footer__title text-uppercase mb-4">{{dataJson()['common']['footer']['newsletter']['title']}}</h3>
              <p class="footer__desc mb-3">{{dataJson()['common']['footer']['newsletter']['content']}}</p>
              <form class="footer__from" id="newsletter_crt" method="POST">
                @csrf
                <input class="p-3 w-100 mb-2 text-center border-0" type="text" placeholder="Enter Your Email">
                <button class="btn main-btn w-100" type="submit">{{dataJson()['common']['footer']['newsletter']['title']}} </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Copy Right-->
    <div class="copy-right py-3">
      <div class="container"> 
        <p class="text-center">{!! dataJson()['common']['footer']['copyright'] !!}</p>
      </div>
    </div>
    <script src="{{asset('/content/js/vendor/jquery-3.6.0.min.js')}}"> </script>
    <script src="{{asset('/content/js/vendor/bootstrap.bundle.min.js')}}"> </script>
    <script src="{{asset('/content/js/vendor/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/content/js/vendor/owl.carousel.min.js')}}"> </script>
    <script src="{{asset('/content/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('/content/js/vendor/all.min.js')}}"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset('/content/js/main.js')}}"> </script>
    <script src="{{asset('/content/js/home.js')}}"> </script>
    <script src="{{asset('/content/js/slider-cosumers.js')}}"> </script>
    <script src="{{asset('/content/js/main-form.js')}}"> </script>
    <script src="{{asset('/content/js/product.js')}}"> </script>
    <script src="{{asset('/content/js/custom.js')}}"> </script>
    @yield('jsfiles')