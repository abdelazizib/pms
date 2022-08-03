@extends('front.layout.app')
@section('title',dataJson()['user']['profile']['page-name'])
@section('content')
    <!-- Start Main Header Page -->
    @section('pagename',dataJson()['user']['profile']['page-name'])
    
    <section class="profile-page"> 
      <div class="container"> 
        <div class="row"> 
          <div class="col-md-4">
            @include('front.pages.user.profile.layout.profilelist')
          </div>
          <div class="col-md-8">  
            <div class="profile__info"> 
              <div class="row align-items-center"> 
                <div class="col-md-3 mb-3 mb-md-0">
                  <div class="profile__info-box"><img src="{{asset('/content/assets/images/chef/chef-1.webp')}}" alt="person-img"></div>
                </div>
                <div class="col-md-9">
                  <div class="profile__info-box mb-2"><span class="profile__info-icon me-2"> <i class="fa fa-user" aria-hidden="true"></i></span><span>{{Auth::user()->name}}</span></div>
                  <div class="profile__info-box mb-2"> <span class="profile__info-icon me-2"> <i class="fa fa-envelope" aria-hidden="true"></i></span><span>{{Auth::user()->email}}</span></div>
                  <div class="profile__info-box mb-2"> <span class="profile__info-icon me-2"> <i class="fa fa-phone" aria-hidden="true"></i></span><span>{{Auth::user()->phone}}</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection