@extends('dashboard.layouts.app')
@section('title','Employee - New')
@section('content')

<div class="side-app">


<div class="page-header">
                            <h1 class="page-title">Employee - New</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0)">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{route('employees.index')}}">Employees</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">New</li>
                                </ol>
                            </div>
                        </div>
<div class="row">
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">New Employee</h4>
                                    </div>
                                    <div class="card-body">
                                        @include('dashboard.layouts.inc.messages')
                                        @include('dashboard.layouts.inc.success_toast')
                                        <form class="form-horizontal" method="POST" action="{{route('employees.store')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="name_of_user">Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="name" value="{{ old('name') }}" id="name_of_user" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="job_of_user">Job</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="job" value="{{ old('job') }}" id="job_of_user" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="phone_of_user">Phone</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="phone" value="{{ old('phone') }}" id="phone_of_user" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="desc_of_user">Description</label>
                                                <div class="col-md-9">
                                                    <textarea name="description" class="form-control" id="desc_of_user">{{old('description')}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="slide_img">Upload Image</label>
                                                <div class="col-md-9">
                                                    <input id="slide_image" type="file" name="image" class="dropify" accept=".jpg, .png, image/jpeg, image/png">

                                                </div>
                                            </div>
                                            <div class="border-bottom my-2"></div>
                                                <div class="m-auto text-center">
                                                <button type="submit" class="btn btn-success w-75">Create</button>

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

    
    @endsection
                        @endsection