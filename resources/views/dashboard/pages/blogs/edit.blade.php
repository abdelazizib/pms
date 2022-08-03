@extends('dashboard.layouts.app')
@section('title','Blog - Edit')
@section('content')

<div class="side-app">


<div class="page-header">
                            <h1 class="page-title">Blog - Edit</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0)">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{route('category.index')}}">Blog</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </div>
                        </div>
<div class="row">
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit Blog</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST" action="{{route('blogs.update',$blog->id)}}">
                                            @csrf
                                            @method('PUT')
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" value="{{$blog->title}}" name="blogs_title" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="blog_small_desc">Small Description</label>
                                                <div class="col-md-9">
                                                <textarea class="form-control" name="blog_desc" id="blog_small_desc">{{$blog->small_description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="blog_category_desc">Description</label>
                                                <div class="col-md-9">
                                                <textarea class="form-control" name="blog_small_desc" id="blog_category_desc">{{$blog->description}}</textarea>
                                                </div>
                                            </div>
                                         
                                            <div class="border-bottom my-2"></div>
                                                <div class="m-auto text-center">
                                                <button type="submit" class="btn btn-success w-75">Edit</button>

                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
</div>              

                        @endsection