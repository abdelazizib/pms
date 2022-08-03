@extends('dashboard.layouts.app')
@section('title','Category - Edit')
@section('content')

<div class="side-app">


<div class="page-header">
                            <h1 class="page-title">Category - Edit</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0)">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{route('category.index')}}">Categories</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </div>
                        </div>
<div class="row">
<div class="col-lg-12">
    @include('dashboard.layouts.inc.success_toast')
    @include('dashboard.layouts.inc.messages')
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit Category</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('category.update',$category->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="name" value="{{$category->name}}" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="category_desc">Description</label>
                                                <div class="col-md-9">
                                                <textarea class="form-control" name="description" id="category_desc">{{$category->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="category_img">Upload Image</label>
                                                <div class="col-md-9">
                                                    <input id="category_img" class="dropify" type="file" name="image" accept=".jpg, .png, image/jpeg, image/png" data-show-remove="false" data-default-file='{{asset("uploaded/categories/images/$category->image")}}'>
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
            <script src="{{asset('dashboard/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
            <script src="{{asset('dashboard/assets/plugins/fileuploads/js/file-upload.js')}}"></script>                       
            @endsection
@endsection