@extends('front.layout.app')
@section('title',dataJson()['user']['changepassword']['page-name'])
@section('content')
    <!-- Start Main Header Page -->
    @section('pagename',dataJson()['user']['changepassword']['page-name'])
    
    <section class="profile-page"> 
      <div class="container"> 
        <div class="row"> 
          <div class="col-md-4">
          @include('front.pages.user.profile.layout.profilelist')

          </div>
          <div class="col-md-8">  
            <div class="profile__info"> 
              <h6 class="mb-3 main-color pb-3 border-bottom">Chanage Your Password</h6>
              <div class="row align-items-center"> 
                <div class="col-md-6 mb-3">
                  <input class="form-control border px-3 py-2" type="password" placeholder="Old Password">
                </div>
                <div class="col-md-6 mb-3">
                  <input class="form-control border px-3 py-2" type="password" placeholder="New Password">
                </div>
                <div class="col-md-6 mb-3">
                  <input class="form-control border px-3 py-2" type="password" placeholder="Confirm Password">
                </div>
                <div class="col-md-6 mb-3">
                  <button class="w-100 btn main-btn py-2" type="submit">Save </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection