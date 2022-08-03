@extends('dashboard.layouts.app')
@section('title','Slide - Edit')
@section('content')

<div class="side-app">


<div class="page-header">
                            <h1 class="page-title">Slide - Edit</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0)">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{route('slider.index')}}">Sliders</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </div>
                        </div>
<div class="row">
<div class="col-lg-12">
    @include('dashboard.layouts.inc.success_toast')
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit Slide</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST" action="{{ route('slider.update',$slider->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class=" row mb-4">
                                                <label class="col-md-3 form-label">Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="slide_title" value="{{$slider->title}}" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="slide_desc">Description</label>
                                                <div class="col-md-9">
                                                <textarea class="form-control" name="slide_desc" id="slide_desc">{{$slider->description}}</textarea>
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
                              

                        @endsection