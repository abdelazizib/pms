@extends('dashboard.layouts.app')
@section('title','Product - Edit')
@section('content')

<div class="side-app">


<div class="page-header">
                            <h1 class="page-title">Edit Product</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0)">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{route('products.index')}}">Products</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </div>
                        </div>
<div class="row">
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit Product</h4>
                                    </div>
                                    <div class="card-body">
                                        @include('dashboard.layouts.inc.messages')
                                        @include('dashboard.layouts.inc.success_toast')
                                        <form class="form-horizontal" method="POST" action="{{route('products.update',$product->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="cat_name">Category Name</label>
                                                <div class="col-md-9">
                                                                <select name="category_id" id="cat_name" class="form-control">
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{$category->id}}" @if ($category->id == $product->category_id) selected @endif>{{$category->name}}</option>
                                                                    @endforeach
                                                                </select>
                                            </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="product_name">Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="name" value="{{ old('name',$product->name) }}" id="product_name" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="product_price">Price</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="price" value="{{ old('price',$product->price) }}" id="product_name" required class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="desc_of_product">Description</label>
                                                <div class="col-md-9">
                                                    <textarea name="description" class="form-control" id="desc_of_product">{{old('description',$product->description)}}</textarea>
                                                </div>
                                            </div>
                                       
                                           
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="slide_img">Upload Image</label>
                                                <div class="col-md-9">
                                                    <input id="demo" type="file" name="image" class="dropify" accept=".jpg, .png, image/jpeg, image/png">

                                                </div>
                                            </div>
                                            <div class="border-bottom my-2"></div>
                                                <div class="m-auto text-center">
                                                <button type="submit" class="btn btn-success w-75">Update</button>

                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
</div>              

@section('js_vendors')
                                        <!-- INTERNAL File-Uploads Js-->
    <script src="{{asset('dashboard/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{asset('dashboard/assets/plugins/fileuploads/js/file-upload.js')}}"></script>   
    <script src="{{asset('dashboard/assets/plugins/select2/select2.full.min.js')}}"></script>
            <script>
                $('select').select2();
            </script>
    @endsection
                        @endsection