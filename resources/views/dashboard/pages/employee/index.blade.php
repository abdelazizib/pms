@extends('dashboard.layouts.app')
    @section('title','Employees')
    @section('content')
    <div class="side-app">


        <div class="page-header">
            <h1 class="page-title">Employees</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Employees</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12">
                  
                    <div class="card-body pt-4">
                        <div class="grid-margin">
                            <div class="">
                                <div class="row">
                                  @foreach ($employees as $user)
                                  <div class="col-6 col-md-6 col-lg-4">
                                    <div class="card border p-0">
                                    <div class="card-header d-block">
                                        <h3 class="card-title">
                                        <div class="row user-social-detail">
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href="tel:{{$user->phone}}"><i class="fa fa-phone"></i></a>
                                            </div>
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-facebook"></i></a>
                                            </div>
                                            <div class="social-profile me-4 rounded text-center">
                                                <a href=""><i class="fa fa-twitter"></i></a>
                                            </div>
                                        </div>
                                                
                                        </h3>
                                       
                                    </div>
                                    <div class="card-body text-center">
                                        <img class="avatar avatar-xxl brround cover-image" style="object-fit: cover;" src='{{asset("uploaded/employees/images/$user->image")}}'>
                                        <h4 class="h4 mb-0 mt-3">{{$user->name}}</h4>
                                        <p class="card-text">{{$user->job}}</p>
                                        <p class="card-text">{{$user->description}}</p>
                                    </div>
                                    <div class="card-footer text-center">
                                    <div class="d-flex justify-content-between">
                                                <a href="{{route('employees.edit',$user->id)}}" class="btn btn-primary-light btn-pill"><i class="fe fe-edit me-2"></i>Edit</a>    
                                            <form class="employee_remove_btn" data-name="{{$user->name}}" data-action="{{route('employees.destroy',$user->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger-light btn-pill">
                                                <i class="fe fe-trash me-2"></i>Remove</button>    

                                            </form>
                                                </div>
                                    </div>
                                </div>
                                </div>
                                @endforeach
                                    </div>
                                    <div class="d-flex justify-content-center">
                                    {{$employees->links()}}
                                    </div>
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    @section('js_vendors')
    <!-- SWEET-ALERT JS -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('dashboard/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('dashboard/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script>
    let table = $('#data-table').DataTable();
    $('.employee_remove_btn').submit(function (e){
        e.preventDefault();
        let employee = $(this);
        let employee_id = employee.attr('data-action');
        let employee_name = employee.attr('data-name');
        swal({
  title: 'Are you sure?',
  text: `To Move ${employee_name} Employee To Trash`,
  icon: 'warning',
  buttons:true,
  dangerMode: true,
}).then((willDelete) => {
    if(willDelete){

    
    $.ajax({
          method:'POST',
          url:employee_id,
          data:employee.serialize(),
          success:function(response){
            if (response.success) {
                employee.parents('.col-6.col-md-6.col-lg-4').fadeOut('fast',function (){
                    $(this).remove();
                })
    swal({
        title:'Moved!',
        text:'Your employee has been moved.',
        icon:'success'
      })
  }
          },
          error:function (res){
            console.log(res);
          }
        })
    }
})

    });

    
    </script>
    @endsection
    @endsection