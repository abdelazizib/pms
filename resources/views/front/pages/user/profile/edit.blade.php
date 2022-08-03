@extends('front.layout.app')
@section('title',dataJson()['user']['edit_profile']['page-name'])
@section('content')
    <!-- Start Main Header Page -->
    @section('pagename',dataJson()['user']['edit_profile']['page-name'])
    
    <section class="profile-page"> 
      <div class="container"> 
        <div class="row"> 
          <div class="col-md-4">
            @include('front.pages.user.profile.layout.profilelist')
          </div>
          <div class="col-md-8">  
            <div class="profile__info"> 
              <h6 class="mb-3 main-color pb-3 border-bottom">Edit Your Profile</h6>
              @include('front.layout.inc.messages')

              <form action="{{route('profile.update')}}" method="POST">
                @csrf
                @method('PUT')
              <div class="row align-items-center"> 
                <div class="col-md-6 mb-3">
                  <input class="form-control border px-3 @error('name') is-invalid @enderror py-2" type="text" name="name" value="{{old('name', Auth::user()->name) }}" placeholder="Name">
               
                </div>
                <div class="col-md-6 mb-3">
                  <input class="form-control border px-3  @error('email') is-invalid @enderror py-2" type="email" name="email"  value="{{old('email', Auth::user()->email) }}" placeholder="Email">
                  
                </div>
                <div class="col-md-6 mb-3">
                  <input class="form-control border px-3 @error('phone') is-invalid @enderror py-2" type="tel" name="user_phone" value="{{ old('user_phone', Auth::user()->phone) }}" placeholder="Phone">
             
                </div>
                <div class="col-md-6 mb-3">
                  <button class="w-100 btn main-btn py-2" type="submit">Save </button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection