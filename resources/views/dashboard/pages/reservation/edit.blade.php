@extends('dashboard.layouts.app')
@section('title','Reservation - Edit')
@section('content')

<div class="side-app">


<div class="page-header">
                            <h1 class="page-title">Reservation - Edit</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="javascript:void(0)">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{route('reservation.index')}}">Reservation</a>
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
                                        <h4 class="card-title">Edit Reservation</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST" id="reservation_edit" enctype="multipart/form-data" action="{{ route('reservation.update',$reservation->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="name" value="{{$reservation->name}}" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Phone</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="phone" value="{{$reservation->phone}}" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Guests</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="guest" value="{{$reservation->guest}}" required class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Description</label>
                                                <div class="col-md-9">
                                                <input value="{{$reservation->date}}" type="date" class="form-control" name="date">
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
            <script src="{{asset('dashboard/assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
            <script src="{{asset('dashboard/assets/js/sweet-alert.js')}}"></script>                    
            @endsection
            @section('jsfiles')
            <script>
            let AllInputs = $('form input:not([type=hidden])').each(function(e){
                return 'x'
            });
            let defaultValues =  AllInputs.each(function(e){
                return 'x'
            });
            console.log(defaultValues);
            AllInputs.change(function (){
                let x = $(this).val()
            console.log(x);
            })
            function isAfterToday(date) {
            const today = new Date();
            today.setHours(23, 59, 59, 998);
            return date > today;
            }
            $('#reservation_edit').submit(function (e){
                e.preventDefault();
                let reservation_date = $(`input[name='date']`).val();
                let today = (new Date()).toISOString().split('T')[0];
                if(!isAfterToday(reservation_date)){
                    $msgSwal = reservation_date == today ? 'will expire soon' : 'has expired';
                    swal({
                        title: "Are you sure?",
                        text: `To Edit Date To ${reservation_date}! This date ${$msgSwal}`,
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-success",
                        confirmButtonText: "Yes, Edit it!",
                        closeOnConfirm: false
                    });
                }
            })
            </script>
            @endsection
@endsection