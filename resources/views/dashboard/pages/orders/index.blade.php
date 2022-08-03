@extends('dashboard.layouts.app')
    @section('title','Orders')
    @section('content')
    <div class="side-app">


        <div class="page-header">
            <h1 class="page-title">Orders</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Orders</h3>
                    </div>
                    <div class="card-body pt-4">
                        <div class="grid-margin">
                            <div class="">
                                <div class="panel panel-primary">
                      
                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab5">
                                                <div class="table-responsive">
                                                    <table id="reservation_table" class="table table-bordered text-nowrap mb-0">
                                                        <thead class="border-top">
                                                            <tr>
                                                                <th class="bg-transparent border-bottom-0" style="width: 5%;">Id</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    User</th>
                                                                    <th class="bg-transparent border-bottom-0">
                                                                    Phone</th>
                                                              
                                                                    
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Total</th>
                                                                    <th class="bg-transparent border-bottom-0">
                                                                    Order Status</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                            @foreach ($orders as $order)
                                                            <tr class="border-bottom">
                                                                <td class="text-center">
                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">
                                                                            {{$loop->iteration}}
                                                                        </h6>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                <a href="{{route('users.show',$order->user_id)}}">
                                                                                <span class='icon mx-2'><i class="fe fe-user text-black"></i></span>    
                                                                                {{$order->user_id}}</a>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="">
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <p class="mb-0 fs-14 fw-semibold">
                                                                                <a href="tel:{{$order->phone}}">{{$order->phone}}</a>
</p>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td><span class="mt-sm-2 d-block">{{$order->total}}</span></td>

                                                                <td>
                                                                   
                                                                   
                                                                    <span class="badge 
                                                                
                                                                   @switch($order->status)
                                                                       @case('success')
                                                                       bg-success-transparent text-success
                                                                           @break
                                                                           @case('pending')
                                                                       bg-warning-transparent text-warning
                                                                           @break
                                                                           @case('rejected')
                                                                       bg-danger-transparent text-danger
                                                                           @break
                                                                           @case('cancelled')
                                                                       bg-danger-transparent text-danger
                                                                           @break
                                                                           @case('shipped')
                                                                       bg-primary-transparent text-primary
                                                                           @break
                                                                   @endswitch
                                                                    rounded-pill p-2 px-3">{{ucfirst($order->status)}}</span>
                                                                </td>


                                                                <td>
                                                                    <div class="g-2 d-flex">
                                                                        <a class="btn text-primary btn-sm" href="{{route('orders.edit',$order->id)}}" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                        <a class="btn text-primary btn-sm" href="{{route('orders.show',$order->id)}}" data-bs-toggle="tooltip" data-bs-original-title="Show"><span class="fe fe-eye fs-14"></span></a>
                                                                        <div class="" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                            <form data-action="{{route('orders.destroy',$order->id)}}" class="remove_btn" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button class="btn text-danger btn-sm" type="submit">  <span class="fe fe-trash-2 fs-14"></span></button>
                                                                            </form>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
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
    $('#reservation_table').DataTable()
    $('.remove_btn').submit(function (e){
        e.preventDefault();
        let form = $(this);
        let reservation_id = form.attr('data-action');
        swal({
  title: 'Are you sure ?',
  text: "To Move This Reservation To Cancelled",
  icon: 'warning',
  buttons:true,
  dangerMode: true,
}).then((willDelete) => {
if(willDelete){
    $.ajax({
          method:'POST',
          url:reservation_id,
          data:form.serialize(),
          success:function(response){
            if (response.success) {
                let table = $('#reservation_table').DataTable();
            table.row( form.parents('tr') )
        .remove().draw();
    swal({
        title:'Moved!',
        text:'The Reservation has been moved.',
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

    })
    </script>
    @endsection
    @endsection