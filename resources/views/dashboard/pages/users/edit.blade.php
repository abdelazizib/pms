@extends('dashboard.layouts.app')
@section('title','User - Edit')
@section('content')

<div class="side-app">


<div class="page-header">
                            <h1 class="page-title">User - Edit</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0)">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{route('users.index')}}">Users</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </div>
                        </div>
<div class="row">
<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit User</h4>
                                    </div>
                                    <div class="card-body">
                                        @include('dashboard.layouts.inc.messages')
                                        @include('dashboard.layouts.inc.success_toast')
                                        <form class="form-horizontal" method="POST" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="name_of_user">Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="name" value="{{ old('name',$user->name) }}" id="name_of_user" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="user_email">Email</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="email" value="{{ old('email',$user->email) }}" id="user_email" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="user_new_phone">Phone</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="phone" value="{{ old('phone',$user->phone) }}" id="user_new_phone" required class="form-control">
                                                </div>
                                            </div>
                                        
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="user_type">User Type</label>
                                                <div class="col-md-9">
                                                                <select name="Is_Admin" id="user_type" class="form-control">
                                                                    <option value="0" {{$user->Is_Admin == 0 ?  'selected': ''}}>User</option>
                                                                    <option value="1" {{$user->Is_Admin == 1 ?  'selected': ''}}>Admin</option>
                                                                </select>
                                            </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="slide_img">Upload Image</label>
                                                <div class="col-md-9">
                                                    <input id="slide_image" type="file" name="image" class="dropify" accept=".jpg, .png, image/jpeg, image/png" data-default-file="{{asset('uploaded/users/images/'.$user->image)}}">

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

<!-- Modal -->
<div class="modal fade" id="passGenerate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Password Generator</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                                            
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label" for="name_of_user">Password Generated</label>
                                                <div class="col-md-9">
                                                <div class="input-group">
                                                    <input type="text" value="" disabled class="form-control" id="modal_pass">
                                                 <span class="pass_copy text-white input-group-text bg-success"> 
                                                 <a href="#" class="pass_copy text-white px-1" id="copy_password">
                                            <i class="fe fe-clipboard"></i>
                                            </a>
                                            <a href="#" class="pass_copy text-white border-start px-1 gen_password">
                                            <i class="fe fe-repeat"></i>
                                            </a>
                                                 </span>
                                                 </div>
                                                </div>
                                            </div>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="setPass">Set</button>
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
    let password = "";

    $(".gen_password").click( function (e) {
     e.preventDefault();
    let chars = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let passwordLength = 12;
 for (let i = 0; i <= passwordLength; i++) {
   let randomNumber = Math.floor(Math.random() * chars.length);
   password += chars.substring(randomNumber, randomNumber +1);
  }
        $('#modal_pass').val(password);
 });
$('#copy_password').click(function (e){
    e.preventDefault();
    let copyText = document.getElementById("modal_pass")
    copyText.select();
  copyText.setSelectionRange(0, 99999); 

  navigator.clipboard.writeText(copyText.value);

})
$('#setPass').click(function (){
    $('#passGenerate').toggle()
    $('#user_pass').val(password)
})
</script>

    @endsection
                        @endsection