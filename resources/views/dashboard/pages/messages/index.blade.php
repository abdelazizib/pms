@extends('dashboard.layouts.app')
    @section('title','Messages')
    @section('content')
    <div class="side-app">


        <div class="page-header">
            <h1 class="page-title">Messages</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Messages</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Messages</h3>
                    </div>
                    <div class="card-body pt-4">
                        <div class="grid-margin">
                            <div class="">
                                <div class="panel panel-primary">
                      
                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active">
                                                <div class="table-responsive">
                                                    <table id="db" class="table table-bordered text-nowrap mb-0">
                                                        <thead class="border-top">
                                                            <tr>
                                                                <th class="bg-transparent border-bottom-0" style="width: 5%;">Id</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Message Name</th>
                                                                    <th class="bg-transparent border-bottom-0">
                                                                    Message Subject</th>
                                                                    <th class="bg-transparent border-bottom-0">
                                                                    Message From</th>
                                                                    <th class="bg-transparent border-bottom-0">
                                                                    Date</th>
                                                                <th class="bg-transparent border-bottom-0">
                                                                    Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($messages as $message)
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
                                                                                {{$message->name}}
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                {{$message->subject}}
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <div class="ms-3 mt-0 mt-sm-2 d-block">
                                                                            <h6 class="mb-0 fs-14 fw-semibold">
                                                                                {{$message->email}}
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><span class="mt-sm-2 d-block">{{$message->created_at}}</span></td>


                                                                <td>
                                                                    <div class="g-2 d-flex">
                                                                        <a class="btn text-primary btn-sm" href="#" data-bs-toggle="tooltip" data-bs-original-title="Replay"><span class="fe fe-repeat fs-14"></span></a>
                                                                        <div class="" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                                            <form action="#" class="remove_btn" method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button class="btn text-danger btn-sm ">  <span class="fe fe-trash-2 fs-14"></span></button>
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
    let table = $('#db').DataTable();
    </script>
    @endsection
    @endsection