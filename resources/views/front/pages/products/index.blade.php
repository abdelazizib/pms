@extends('front.layout.app')
@section('title',dataJson()['products']['page-name'])
@section('content')
    <!-- Start Main Header Page -->
    @section('pagename',dataJson()['products']['page-name'])
    <!-- End Main Header Page -->
    <section class="py-5 page-product">
      <div class="container"> 
        <div class="row">
          <div class="col-lg-6 mb-3 mb-lg-0">
            <div class="product__imgs-box"><img class="product__main-img" src="content/assets/images/menu/breakfast-1.webp" alt="meal menu">
              <div class="product__imgs"><img class="product__img active" src="content/assets/images/menu/breakfast-1.webp" alt="meal menu"><img class="product__img" src="content/assets/images/menu/breakfast-2.webp" alt="meal menu"><img class="product__img" src="content/assets/images/menu/breakfast-3.webp" alt="meal menu"></div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="product__info mb-3 p-lg-4 p-2">
              <h2 class="main-color">{{$product['name']}} </h2><span class="fw-bold">Breakfast </span>
              <p class="my-2">{{$product['description']}}</p><span class="d-block fw-bold mb-2">{{$product['price']}} E.G</span>
              <button class="btn main-btn" type="submit">Add To Cart</button>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection