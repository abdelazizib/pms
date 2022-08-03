@extends('front.layout.app')
@section('title',dataJson()['cart']['page-name'])
@section('content')
<!-- Start Main Header Page -->
@section('pagename',dataJson()['cart']['page-name'])
<section class="cart-page"> 
      <div class="container"> 
        <div class="row"> 
          <div class="col-lg-8">
            <div class="cart__items p-4 mb-3 mb-lg-0">
              <div class="cart__items-head d-flex justify-content-between border-bottom mb-3 pb-2">
                <p>Items in your cart</p>
                <p> <span class="cart__items-conut">{{$cartItems->count()}} </span>items</p>
              </div>
           @foreach ($cartItems as $product_cart)
           <div class="cart__item pb-3 mb-3"> 
           <input type="hidden" class="product_id" name="product_id" value="{{Crypt::encryptString($product_cart->id)}}">
                <div class="cart__item-info">
                  <div class="cart__item-box"><img src="{{$product_cart->attributes->image}}" alt="img-cart"></div>
                  <div class="cart__item-box"><span class="cart__item-name">{{$product_cart->name}}</span>
                    <p class="cart__item-desc my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, rerum!</p>
                    <div class="cart__item-action">
                    <form class="remove_product_cart">
                        @csrf
                        <input type="hidden" name="id" value="{{Crypt::encryptString($product_cart->id)}}">
                    <button class="btn main-btn py-2" class="" type="submit">Remove <span class="cart__item-icon">  <i class="fa fa-trash" aria-hidden="true"></i></span></button>
                    </form>
                    </div>
                  </div>
                  <div class="cart__item-box"><span class="cart__item-price">Price : {{$product_cart->price}}$</span>
                    <input class="cart__item-count border px-3 py-2" type="number" name="count"  min="1" value="{{$product_cart->quantity}}" placeholder="1"><span class="cart__item-price">Total : <span class="price_product">{{$product_cart->price * $product_cart->quantity}}</span> E.g</span>
                  </div>
                </div>
              </div>
              <!-- End Cart Item-->
           @endforeach

            </div>
          </div>
          <div class="col-lg-4">
            <div class="cart__total p-3">
              <div class="cart__total-head border-bottom p-2 mb-3">
                <h2>Summary</h2>
              </div>
              @if($cartItems->count() > 0)
              <div class="border-bottom p-2 mb-3">
                <div class="d-flex justify-content-between algin-items-center mb-2">
                  <h6>Subtotal </h6><span>{{$total_price_cart}}$</span>
                </div>
                <div class="d-flex justify-content-between algin-items-center mb-2">
                  <h6>Tax </h6><span>100$</span>
                </div>
                <div class="d-flex justify-content-between algin-items-center">
                  <h6>Total </h6><span> {{$total_price_cart + 100}}$</span>
                </div>
              </div>
              <div class="cart__total-btns"> 
              <a class="btn main-btn w-100" href="{{route('checkout')}}">Check Out Now</a>
                
              </div>
              @endif
           
            </div>
          </div>
        </div>
      </div>
    </section>
    @section('jsfiles')
    @include('front.js.ajax.cart.remove_from_cart_ajax')
    @include('front.js.ajax.cart.update_from_cart_ajax')
    @endsection
@endsection