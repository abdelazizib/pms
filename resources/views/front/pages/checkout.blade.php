@extends('front.layout.app')
@section('title',dataJson()['checkout']['page-name'])
@section('content')
    <!-- Start Main Header Page -->
    @section('pagename',dataJson()['checkout']['page-name'])
    
    <section class="checkout-page">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-4">
            <!-- Card content-->
            <form class="checkout__from" action="{{ route('checkout.store') }}" method="POST" id="checkout"> 
              @csrf
              @include('front.layout.inc.messages')
              <h6 class="checkout__title pb-2 mb-3 border-bottom">Check Out Form</h6>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="md-form">
                    <input class="form-control" type="text" value="Test" name="fname" placeholder="First name" name="fname" required>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="md-form">
                    <input class="form-control" type="text" value="Test" name="lname" placeholder="Last name" name="lname" required>
                  </div>
                </div>
                <div class="md-form mb-3">
                  <input class="form-control" type="text" name="email" value="youremail@example.com" placeholder="youremail@example.com" name="email" required>
                </div>
                <div class="md-form mb-3">
                  <input class="form-control" type="text" name="phone" value="0100" placeholder="youremail@example.com" name="email" required>
                </div>
                <div class="md-form mb-3">
                  <input class="form-control" type="text" name="address" value="1234 Main St" placeholder="1234 Main St" name="address" required>
                </div>
                <div class="md-form mb-3">
                  <input class="form-control" type="text" name="apartment" value="Apartment or suite" placeholder="Apartment or suite" name="suite" required>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                  <select class="form-select d-block w-100" required name="country">
                    <option value="">Choose...</option>
                    <option selected>United States</option>
                  </select>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <select class="form-select d-block w-100" required name="state">
                    <option value="">Choose...</option>
                    <option selected>California</option>
                  </select>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                  <input class="form-control" type="text" name="zip" placeholder="Zip code" value="12341" required name="zipcode">
                </div>
              </div>
   
              <div class="d-block my-3">
           
                <div class="form-check">
                  <input class="form-check-input" id="cash" type="radio" name="payment_method" value="cash" checked>
                  <label class="form-check-label" for="cash">Cash</label>
                </div>
              </div>
              <button class="btn main-btn w-100 submit" type="submit">Continue to checkout</button>
            </form>
            <!-- /.Card-->
          </div>
          <!-- Grid column-->
          <div class="col-md-4 mb-4">
            <!-- Cart-->
            <ul class="checkout__list">
              <h6 class="checkout__title pb-2 mb-3 border-bottom">Your Order</h6>
              @foreach ($allProductInCart as $cart_product)
              <li class="checkout__list-item">
                <form class="remove_item_form">
                  <button class="remove_item_btn">
                    <i class="fa fa-times delete_icon" aria-hidden="true"></i>
                      </button>
                </form>
                <div class="checkout__list-box">
                  <h6 class="my-0">{{ $cart_product->name }}</h6>
                  <small class="text-muted">{{ $cart_product->description }}</small>
                  <span class="text-muted">{{$cart_product->quantity}} x {{$cart_product->price}}E.G</span>
                </div>
              </li>
              @endforeach
              <li class="checkout__list-item">
                <div class="checkout__list-box">
                  <h6 class="my-0">Shipping Fee</h6>
                  <span class="text-muted">20E.G</span>
                </div>
              </li>
              
            </ul>
            <div class="checkout__list-footer"><span>Total </span><strong>{{Cart::getTotal()}}E.G</strong></div>
            <!-- Cart-->
          </div>
          <!-- Grid column-->
        </div>
        <!-- Grid row-->
      </div>
    </section>
@endsection