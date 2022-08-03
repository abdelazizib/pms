@extends('dashboard.layouts.app')
@section('title','Product - ')
@section('content')
<div class="side-app">
@include('dashboard.layouts.inc.success_toast')

<!-- CONTAINER -->
<div class="main-container container-fluid">

<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Product Details</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW-1 OPEN -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row row-sm">
                    <div class="col-xl-5 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="product-carousel">
                                    <div id="Slider" class="carousel slide border" data-bs-ride="false">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img src="../assets/images/pngs/13.png" alt="img" class="img-fluid mx-auto d-block">
                                                <div class="text-center mt-5 mb-5 btn-list">
                                                </div>
                                            </div>
                                            <div class="carousel-item"> <img src="../assets/images/pngs/14.png" alt="img" class="img-fluid mx-auto d-block">
                                                <div class="text-center mb-5 mt-5 btn-list">
                                                </div>
                                            </div>
                                            <div class="carousel-item"> <img src="../assets/images/pngs/12.png" alt="img" class="img-fluid mx-auto d-block">
                                                <div class="text-center  mb-5 mt-5 btn-list">
                                                </div>
                                            </div>
                                            <div class="carousel-item"> <img src="../assets/images/pngs/11.png" alt="img" class="img-fluid mx-auto d-block">
                                                <div class="text-center  mb-5 mt-5 btn-list">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix carousel-slider">
                                    <div id="thumbcarousel" class="carousel slide" data-bs-interval="t">
                                        <div class="carousel-inner">
                                            <ul class="carousel-item active">
                                                <li data-bs-target="#Slider" data-bs-slide-to="0" class="thumb active m-2"><img src="../assets/images/pngs/13.png" alt="img"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                        <div class="mt-2 mb-4">
                            <h3 class=" mb-3">{{ $product->name }}</h3>
                            <h4 class="mt-4"><b> Description</b></h4>
                            <p>{{$product->description}}</p>
                            <h3 class="mb-4"><span class="me-2 fw-bold fs-25">${{$product->price}}</span></h3>
                        
                            
                            <div class="row row-sm">
                                <div class="col">
                                    <div class="mb-2 me-2 sizes">
                                        <span class="fw-bold me-4">Quantity:</span>
                                        <div class="input-group input-indec input-indec1 w-30 w-sm-50 mt-3">
                                            <span class="input-group-btn">
                                                <button type="button" class="minus btn btn-white btn-number btn-icon br-7 " >
                                                    <i class="fa fa-minus text-muted"></i>
                                                </button>
                                            </span>
                                            <input type="text" name="quantity" class="form-control text-center qty" min="1" value="1">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-right-plus btn btn-white btn-number btn-icon br-7 add">
                                                    <i class="fa fa-plus text-muted"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="btn-list mt-4">
                                <a href="cart.html" class="btn ripple btn-primary me-2"><i class="fe fe-shopping-cart"> </i> Add to cart</a>
                                <a href="checkout.html" class="btn ripple btn-secondary"><i class="fe fe-credit-card"> </i> Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-md-12">
        <div class="card productdesc">
            <div class="card-body">
                <div class="panel panel-primary">
                    <div class=" tab-menu-heading">
                        <div class="tabs-menu1">
                            <!-- Tabs -->
                            <ul class="nav panel-tabs">
                                <li><a href="#tab5" class="active" data-bs-toggle="tab">Specifications</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body tabs-menu-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab5">
                                <h4 class="mb-5 mt-3 fw-bold">Description :</h4>
                                <p class="mb-3 fs-15">
                                    {{$product->description}}
                                </p>
                           
                            </div>
                         
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

</div>
<!-- ROW-1 CLOSED -->
</div>
<!-- CONTAINER CLOSED -->
</div>


@endsection