@extends('dashboard.layouts.app')
@section('title','Products')
@section('content')
<div class="side-app">

<!-- CONTAINER -->
<div class="main-container container-fluid">

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Products</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">All</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row row-cards">
        <div class="col-xl-3 col-lg-4">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Categories</div>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach ($categories as $cat)
                                    
                                <li class="list-group-item border-0 p-0">
                                     <a href="javascript:void(0)"><i class="fe fe-chevron-right"></i>
                                      {{$cat->name}} </a><span class="product-label">{{$cat->products->count()}}</span>
                                     </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Category</label>
                                <select name="beast" id="select-beast" class="form-control form-select select2">
                                    <option selected disabled>--Select--</option>
                                    @foreach ($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
            
                            <div class="form-group">
                                <label class="form-label">Type</label>
                                <select name="beast" id="select-beast2" class="form-control form-select select2">
                                    <option value="0">--Select--</option>
                                    <option value="1">Extra Small</option>
                                    <option value="2">Small</option>
                                    <option value="3">Medium</option>
                                    <option value="4">Large</option>
                                    <option value="5">Extra Large</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Color</label>
                                <select name="beast" id="select-beast3" class="form-control form-select select2">
                                    <option selected disabled>--Select--</option>
                                    <option value="1">White</option>
                                    <option value="2">Black</option>
                                    <option value="3">Red</option>
                                    <option value="4">Green</option>
                                    <option value="5">Blue</option>
                                    <option value="6">Yellow</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Top Products</div>
                        </div>
                        <div class="card-body">
                            <div class="">
                                @foreach ($products as $product)
                                    
                                
                                <div class="d-flex overflow-visible border-bottom mt-3 pb-2">
                                    <img class="avatar bradius avatar-xl me-4 p-1 bg-white border" src="{{ $product->image }}" alt="avatar-img">
                                    <div class="media-body valign-middle">
                                        <a href="{{ route('products.show',$product->slug) }}" class="fw-semibold text-dark">{{ $product->name }}</a>
                                  
                                        
                                        <h5 class="fw-bold">${{ floatval($product->price) }}</h5>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL-END -->
        <div class="col-xl-9 col-lg-8">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card p-0">
                        <div class="card-body p-4">
                            <div class="row justify-content-between">
                                <div class="col-xl-5 col-lg-8 col-md-8 col-sm-8">
                                    <form action="{{route('products.search')}}" method="GET">
                                        
                                        <div class="input-group d-flex w-100 float-start">
                                            <input type="text" class="form-control border-end-0 my-2" name="text" placeholder="Search ...">
                                            <button type="submit" class="btn input-group-text bg-transparent border-start-0 text-muted my-2">
                                                <i class="fe fe-search text-muted" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            
                                
                                <div class="col-xl-3 col-lg-12">
                                    <a href="{{route('products.create')}}" class="btn btn-primary btn-block float-end my-2"><i class="fa fa-plus-square me-2"></i>New Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-11">
                    <div class="row">
                        @foreach ($products as $product)
                            
                        
                    <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="product-grid6">
                                    <div class="product-image6 p-5">
                                        <ul class="icons">
                                            <li>
                                                <a href="{{ route('products.show',$product->slug) }}" class="bg-primary text-white border-primary border"> <i class="fe fe-eye">  </i> </a>
                                            </li>
                                            <li><a href="{{ route('products.edit',$product->id) }}" class="bg-success text-white border-success border"><i  class="fe fe-edit"></i></a></li>
                                            <li><a href="#" data-remove="{{ route('products.destroy',$product->id) }}" class="bg-danger text-white border-danger border product_remove"><i class="fe fe-trash"></i></a></li>
                                        </ul>
                                        <a href="{{ route('products.show',$product->id) }}" class="bg-light">
                                            <img class="img-fluid br-7 w-100" src="{{$product->image}}" alt="img">
                                        </a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="product-content text-center">
                                            <h1 class="title fw-bold fs-20"><a href="{{ route('products.show',$product->id) }}">{{$product->name}}</a></h1>
                                            
                                            <div class="price">${{$product->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="cart.html" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart me-2"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div> 
                    <div class="mb-5">
                        <div class="float-end">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            
                
            </div>
            <!-- COL-END -->
        </div>
        <!-- ROW-1 CLOSED -->
    </div>
    <!-- ROW-1 END -->
</div>
<!-- CONTAINER CLOSED -->
</div>
@section('js_vendors')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
@section('jsfiles')
<script>
       $('.product_remove').click(function(e) {
        e.preventDefault();
        let product = $(this);
        let product_id = product.attr('data-remove');
        swal({
            title: 'Are you sure?',
            text: "To Move This Product To Trash",
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: 'DELETE',
                    url: product_id,
                    data: {
                        '_token':'{{csrf_token()}}'
                    },
                    success: function(response) {
                        if (response.success) {
                         
                            product.parents('.col-md-6.col-xl-4').fadeOut('slow', () =>{
                                $(this).remove()
                                swal({
                                title: 'Moved!',
                                text: 'Your Product has been moved.',
                                icon: 'success'
                            })
                            });
                          
                        }
                    },
                    error: function(res) {
                        console.log(res);
                    }
                })
            }


        })

    })

</script>
@endsection
@endsection