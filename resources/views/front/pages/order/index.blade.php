@extends('front.layout.app')
@section('title',dataJson()['user']['orders']['page-name'])
@section('content')
    <!-- Start Main Header Page -->
    @section('pagename',dataJson()['user']['orders']['page-name'])
    
    <section class="profile-page"> 
      <div class="container"> 
        <div class="row"> 
        <div class="col-md-4">
            @include('front.pages.user.profile.layout.profilelist')
          </div>
          <div class="col-md-8">  
            <div class="profile__info"> 
              <h6 class="mb-3 main-color pb-3 border-bottom">Your Order</h6>
              <div class="table-responsive">
                <table class="table text-center table-bordered">
                  <thead>
                    <tr>
                      <th>Img</th>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> <img class="order-img" src="content/assets/images/menu/drink-2.webp" alt="order-img"></td>
                      <td>User Name</td>
                      <td>12/2/2020</td>
                      <td>Giza</td>
                      <td>+02 123 456 789</td>
                      <td> <a class="order link" href="#">View </a></td>
                    </tr>
                    <!-- End tr-->
                    <tr>
                      <td> <img class="order-img" src="content/assets/images/menu/drink-2.webp" alt="order-img"></td>
                      <td>User Name</td>
                      <td>12/2/2020</td>
                      <td>Giza</td>
                      <td>+02 123 456 789</td>
                      <td> <a class="order link" href="#">View </a></td>
                    </tr>
                    <!-- End tr-->
                    <tr>
                      <td> <img class="order-img" src="content/assets/images/menu/drink-2.webp" alt="order-img"></td>
                      <td>User Name</td>
                      <td>12/2/2020</td>
                      <td>Giza</td>
                      <td>+02 123 456 789</td>
                      <td> <a class="order link" href="#">View </a></td>
                    </tr>
                    <!-- End tr-->
                    <tr>
                      <td> <img class="order-img" src="content/assets/images/menu/drink-2.webp" alt="order-img"></td>
                      <td>User Name</td>
                      <td>12/2/2020</td>
                      <td>Giza</td>
                      <td>+02 123 456 789</td>
                      <td> <a class="order link" href="#">View </a></td>
                    </tr>
                    <!-- End tr-->
                    <tr>
                      <td> <img class="order-img" src="content/assets/images/menu/drink-2.webp" alt="order-img"></td>
                      <td>User Name</td>
                      <td>12/2/2020</td>
                      <td>Giza</td>
                      <td>+02 123 456 789</td>
                      <td> <a class="order link" href="#">View </a></td>
                    </tr>
                    <!-- End tr-->
                    <tr>
                      <td> <img class="order-img" src="content/assets/images/menu/drink-2.webp" alt="order-img"></td>
                      <td>User Name</td>
                      <td>12/2/2020</td>
                      <td>Giza</td>
                      <td>+02 123 456 789</td>
                      <td> <a class="order link" href="#">View </a></td>
                    </tr>
                    <!-- End tr-->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection