@extends('admin.index')
@section('content')

    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Oders Details</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item">Oders</li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </div>
        @if(session('delete'))
        <div  class="alert alert-danger">
            {{ session('delete') }}
        </div>
        @elseif(session('oder_close'))
        <div class="alert alert-success">
            {{ session('oder_close') }}
        </div>
        @elseif(session('un_oder_close'))
        <div  class="alert alert-danger">
            {{ session('un_oder_close') }}
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
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>product</th>
                                    <th>Quantity</th>
                                    <th>Address</th>
                                    <th>Total</th>

                                    <th>Delete</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_oder_details as $oder_details)
                                <tr>
                                    <td>{{$oder_details->id}}</td>
                                    <td>{{$oder_details->oders->users->first_name." ".$oder_details->oders->users->last_name}}</td>
                                    <td>
                                        {{$oder_details->oders->products->name}}
                                        {{-- <?php 
                                        use App\Models\Oder;
                                         $list_oders = Oder::where('user_id',$oder_details->users_id)->get();
                                        ?>
                                        
                                        @foreach ($list_oders as $oders)
                                            {{$oders->products->name}}
                                        @endforeach --}}


                                    </td>
                                    <td>{{$oder_details->oders->quantity}}</td>
                                    <td>{{$oder_details->shippings->address.", ".$oder_details->shippings->city}}</td>
                                    {{-- <td>{{number_format($list_oders->sum('total')).'$'}}</td> --}}
                                    
                                    <td><a href="admin/oder_details/delete/{{$oder_details->id}}"</a><i></i>Delete</a></td>
                                    
                                    @if($oder_details->status == '0')
                                        <td><span class="badge badge-success">Đã chốt</span></td>   
                                    @elseif($oder_details->status == '1')
                                        <td><span class="badge badge-danger">Chưa chốt</span></td>
                                    @endif
                                    @if($oder_details->status == '0')
                                        <td><a href="admin/oder_details/un_oder_close/{{$oder_details->id}}" class="btn btn-sm btn-danger">Hủy</a></td>
                                    @elseif($oder_details->status == '1')
                                        <td><a href="admin/oder_details/oder_close/{{$oder_details->id}}" class="btn btn-sm btn-primary">Chốt đơn</a></td>
                                     @endif
                                
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


    </div>
    <!---Container Fluid-->


@endsection
