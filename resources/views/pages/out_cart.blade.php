@extends('layout.index')
@section('title')
    Out cart
@endsection
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
        @if (empty($out_cart))
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
                                    <th>Price</th>
                                    <th>Address</th>
                                    <th>Total</th>
                                    <th>Status</th>






                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($out_cart as $out_cart)
                                <tr>
                                        
                                    <td>{{$out_cart->oders->users->first_name." ".$out_cart->oders->users->last_name}}</td>
                                    <td>
                                    
                                    @foreach ($list_products as $products)
                                            @if(in_array($products->id,$product_id))
                                                {{$products->name}}<br>
                                            @endif
                                    @endforeach


                                    </td>
                                    <td>
                                        @foreach ($list_oders as $oders)
                                        @if(in_array($oders->quantity,$quantity))
                                            {{"x".$oders->quantity}}<br>
                                        @endif
                                        @endforeach
                                    </td>

                                    
                                    <td>
                                        @foreach ($list_oders as $oders)
                                        @if(in_array($oders->total,$total))
                                            {{number_format($oders->total)}}$<br>
                                        @endif
                                        @endforeach
                                    </td>
                                    <td>{{$out_cart->shippings->address.", ".$out_cart->shippings->city}}</td>

                                    <td style="color: red; font-weight: bold;">{{number_format($list_oders->sum('total')).'$'}}</td>
                                    <td>
                                        @if ($out_cart->status == '0')
                                        <span class="badge badge-success">Đã chốt</span>  
                                            
                                        @endif
                                        @if ($out_cart->status == '1')
                                        <span class="badge badge-danger">Chưa chốt</span>  
                                        @endif
                                    </td>

                                
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
        <div class="row">
            <div class="col-lg-12" style="display: flex; align-items: center;">
                <div class="shoping__cart__btns" >
                    <a href="{{route('user_shop')}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                </div>
            </div>
        </div>
        @endif
            <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Purchased Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($list_products as $products)
                @if(in_array($products->id,$product_id))
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="uploads/products/{{ $products->image }}">
                            <ul class="product__item__pic" >
                                <li style="width:100px;"><a href="products_details/{{ $products->id }}"><button class="btn btn-danger">Repurchase</button></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="products_details/{{ $products->id }}">{{ $products->name }}</a></h6>
                            <h5>{{ number_format($products->unit_price) }} $</h5>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>
    </div>
@endsection
