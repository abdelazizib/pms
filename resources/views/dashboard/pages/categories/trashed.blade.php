    @extends('dashboard.layouts.app')
    @section('title','Categories Trashed')
    @section('content')
    <div class="side-app">


        <div class="page-header">
            <h1 class="page-title">Categories Trashed</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Trashed</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Categories Trashed</h3>
                    </div>
                    <div class="card-body pt-4">
                        <div class="grid-margin">
                            <div class="">
                                <div class="panel panel-primary">
                      
                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab5">
                                                <div class="table-responsive">
                                                    <table id="data-table" class="table table-bordered text-nowrap mb-0">
                                                        <thead class="border-top">
                                                            <tr>
                                                                <th class="bg-transparent border-bottom-0" style="width: 5%;">Id</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Category Name</th>
                                                               
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Deleted At</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($categories as $cat)
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
                                                                        <span class="avatar bradius" style='background-image: url( {{ asset("uploaded/categories/images/$cat->image") }} )'></span>
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                {{$cat->name}}
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">{{$cat->deleted_at}}</span></td>


                                                                <td>
                                                                    <div class="g-2 d-flex">
                                                                    <div class="" data-bs-toggle="tooltip" data-bs-original-title="Restore">
                                                                            <form data-action="{{route('category.trash.restore',$cat->id)}}" class="restore_btn" method="POST">
                                                                                @csrf
                                                                                <button class="btn text-primary btn-sm">
                                                                                <span class="fe fe-refresh-ccw fs-14"></span></button>
                                                                            </form>
                                                                          
                                                                        </div>

                                                                        <div class="" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                            <form data-action="{{route('category.destroy',$cat->id)}}" class="restore_btn" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button class="btn text-danger btn-sm">
                                                                                <span class="fe fe-trash-2 fs-14"></span></button>
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
    let table = $('#data-table').DataTable();
    $('.restore_btn').submit(function (e){
        e.preventDefault();
        let form = $(this);
        let cat_id = $(this).attr('data-action');
        swal({
  title: 'Are you sure?',
  text: "To Restore This Category",
  icon: 'warning',
  buttons:true,
  dangerMode: true,
}).then((willDelete) => {
    if(willDelete){

    
    $.ajax({
          method:'POST',
          url:cat_id,
          data:form.serialize(),
          success:function(response){
            if (response.success) {
            table.row( form.parents('tr') )
        .remove().draw();
    swal({
        title:'Moved!',
        text:'Your Category has been restored.',
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