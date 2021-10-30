@extends('layout.index')
@section('content')

    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">

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
                                    <th>User Name</th>
                                    <th>product</th>
                                    <th>Quantity</th>
                                    <th>Address</th>
                                    <th>Total</th>
                                    <th>Action</th>




                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($out_cart as $out_cart)
                                <tr>
                                        
                                    <td>{{$out_cart->oders->users->first_name." ".$out_cart->oders->users->last_name}}</td>
                                    <td>
                                        {{$out_cart->oders->products->name}}

                                    </td>
                                    <td>{{$out_cart->oders->quantity}}</td>
                                    <td>{{$out_cart->shippings->address.", ".$out_cart->shippings->city}}</td>
                                    <td>{{number_format($out_cart->oders->sum('total')).'$'}}</td>
                                    
                                    <td><a href="admin/out_cart/delete/{{$out_cart->id}}"</a><i></i>Delete</a></td>
                                    

                                
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
