    @extends('admin.index')
    @section('content')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Oders Table</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Oders</li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </div>
            @if (session('delete'))
            <div class="alert alert-danger">
                {{ session('delete') }}
            </div>
        @endif
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <!-- Simple Tables -->
                    <div class="card">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Oders</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th>User Name</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Total</th>

                                        <th>Delete</th>

                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_oders as $oders)
                                    <tr>
                                        <td>{{$oders->users->name}}</td>
                                        <td>{{$oders->products->name}}</td>

                                        <td>1</td>
                                        <td>{{$oders->total}}</td>

                                        <td><a href="admin/oders/delete/{{$oders->id}}"</a><i></i>Delete</a></td>

                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
            <!--Row-->

            <!-- Modal Logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to logout?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                            <a href="login.html" class="btn btn-primary">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!---Container Fluid-->


    @endsection
