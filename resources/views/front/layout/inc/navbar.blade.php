<div class="navbar-content"> 
      <!-- Start Upper Nav-->
      <div class="upper-nav pt-2 d-none d-lg-block"> 
        <div class="container"> 
          <div class="row align-items-center"> 
            <div class="col-lg-6">
              <div class="upper-nav__info"><span>Phone no: </span><span class="upper-nav__contact">{{dataJson()['common']['nav']['phone']}}</span><span> or </span><span>email us: </span><span class="upper-nav__contact">{{dataJson()['common']['nav']['email']}}</span></div>
            </div>
            <div class="col-lg-6">
              <div class="upper-nav__shochail d-flex justify-content-lg-end align-items-center"><span class="me-2">{{dataJson()['common']['nav']['work-time']}}</span>
                <ul class="upper-nav__icons d-flex align-items-center">
                  <li><a class="upper-nav__icon" href="{{dataJson()['common']['nav']['social']['face']}}" aria-hidden="true"> <i class="fab fa-facebook-f" aria-hidden="true"> </i></a></li>
                  <li><a class="upper-nav__icon" href="{{dataJson()['common']['nav']['social']['twitter']}}" aria-hidden="true"> <i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a class="upper-nav__icon" href="{{dataJson()['common']['nav']['social']['instagram']}}" aria-hidden="true"> <i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a class="upper-nav__icon" href="{{dataJson()['common']['nav']['social']['drible']}}" aria-hidden="true"> <i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Upper Nav-->
      <div class="container"> 
        <div class="user-nav py-1 px-lg-4"> 
          <div class="row align-itemx-center"> 
            <div class="col-6">
              @if (Auth::check())
              <div class="dropdown">
              <a class="user__info dropdown-toggle" href="{{route('profile.index')}}"  id="dropdownMenulog" data-bs-toggle="dropdown" aria-expanded="false">

              <span class="user__icon me-2"> <i class="fa fa-user" aria-hidden="true"></i></span>
                {{Auth::user()->name}}</a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenulog" >
    @if (Auth::user()->Is_Admin == 1)
    <li><a class="dropdown-item" href="{{route('admin.home')}}">Dashboard</a></li>
    @endif
    <li><a class="dropdown-item" href="{{route('profile.index')}}">Profile</a></li>
    <li><a class="dropdown-item" href="{{route('order.index')}}">Orders History</a></li>
    <li><hr class="dropdown-divider"></li>
    <li class="dropdown-item text-center">
      <form action="{{route('logout')}}" method="POST">
      @csrf
      <button type="submit" class="btn btn-sm btn-danger">Logout</button>
      </form>

  </ul>
</div>
@else
<a class="user__info" href="{{route('login')}}"><span class="user__icon me-2"> <i class="fa fa-user" aria-hidden="true"></i></span> Login / Register</a>
              @endif
          </a></div>
            <div class="col-6">
              <div class="shopping-box text-end"><span class="shopping-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                <div class="shopping-cart p-3"> 
                  <div class="shopping-cart__head border-bottom d-flex justify-content-between mb-3 pb-2"><span class="shopping-cart__head-icon main-color"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span><span>Total : <span>{{Cart::getTotal()}}$</span></span></div>
                  <div class="shopping-cart__body"> 
                      @foreach (Cart::getContent()->take(3) as $product)
                      <div class="shopping-cart__body-item d-flex justify-content-between mb-3 pb-2 align-items-center">
                         <img class="shopping-cart__item-img" src="{{asset('content/assets/images/menu/breakfast-1.webp')}}" alt="{{ $product->name }}">
                         
                         <span class="shopping-cart__item-price">{{ $product->price }}$</span>
                        </div>
                      @endforeach
                      
                    <a class="btn main-btn w-100" href="{{route('cart.list')}}">Show  {{ 
                    (count(Cart::getContent()) - 3)  > 0 ? 'More (' . (count(Cart::getContent()) - 3) . ')' : 'Cart' 
                    }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start  Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light pb-2">
        <div class="container">
          <div class="navbar navbar__content w-100 navbar__content-bg"><a class="navbar-brand" href="{{route('home')}}">{!!dataJson()['common']['logo']!!}</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar__btn-toggle text-uppercase">Menu</span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item {{Request::is('/'.{{app()->getlocale()}}) ? 'active' : ''}}"> <a class="nav-link text-uppercase" href="{{route('home')}}">Home </a></li>
                <li class="nav-item {{Request::is('about') ? 'active' : ''}}"> <a class="nav-link text-uppercase" href="{{route('about')}}">About</a></li>
                <li class="nav-item {{Request::is('chefs') ? 'active' : ''}}"><a class="nav-link text-uppercase" href="{{route('chefs')}}">Chef</a></li>
                <li class="nav-item {{Request::is('menu') ? 'active' : ''}}"> <a class="nav-link text-uppercase" href="{{route('menu')}}">Menu</a></li>
                <li class="nav-item {{Request::is('reservation') ? 'active' : ''}}"> <a class="nav-link text-uppercase" href="{{route('reservation')}}">Reservation</a></li>
                <li class="nav-item {{Request::is('blog') ? 'active' : ''}}"> <a class="nav-link text-uppercase" href="{{route('blog')}}">Blog</a></li>
                <li class="nav-item {{Request::is('contact') ? 'active' : ''}}"> <a class="nav-link text-uppercase" href="{{route('contact')}}">Contact</a></li>
                <li class="nav-item"> <a class="nav-link text-uppercase" href="index-rtl.html">AR</a></li>
                <li class="nav-item"></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!-- End Upper Navbar-->
    </div>