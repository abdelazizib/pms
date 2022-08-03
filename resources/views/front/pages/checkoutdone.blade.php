@extends('front.layout.app')
@section('title','Order Is Cooking')
@section('content')
    <!-- Start Main Header Page -->
    @section('pagename','Order Is Cooking')
    
    <section class="checkout-page">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="cooking_done text-center">
               
                  <p class="text-success">Thank You For Complete Your Order</p>
                  <h2>Cooking in progress..</h2>
                  <div class="w-25 m-auto">
                    <img src="{{asset('content/assets/images/order/cook-chef.gif')}}" alt="">

                  </div>
               
                  

            </div>
        </div>
        <!-- Grid row-->
      </div>
    </section>


@endsection