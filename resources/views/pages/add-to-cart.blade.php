@extends('layout.index')
@section('title')
Giỏ hàng
@endsection
@section('content')
<?php

use App\Models\Product_Attribute;
use App\Models\Attribute;
use App\Models\Oder;

$list_colors = Attribute::where('name', 'color')->get();
$list_sizes = Attribute::where('name', 'size')->get();
?>
<style>
    .colors label {
        cursor: pointer;
        margin-top: 5px;
    }

  
</style>
<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        @if (session('delete'))
        <div style="text-align: center" class="alert alert-success">
            {{ session('delete') }}
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Sản phẩm</th>
                                <th>Kích thước</th>
                                <th>Màu sắc</th>
                                <th>Giá bán</th>
                                <th>Số lượng</th>
                                <th>Tổng cộng</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_oders as $cart)
                            <tr>
                                <td class="shoping__cart__item">
                                    <h5>{{substr($cart->products->name,0,50)}}</h5><br>
                                    <img style="width: 100px; height:100px" src="uploads/products/{{$cart->products->image}}" alt="">
                                </td>
                                <td>
                                    <?php $id_attr = Oder::where('product_id', $cart->products->id)->pluck('size')->toArray(); ?>
                                    @foreach ($list_sizes as $size)
                                    @if(in_array($size->id,$id_attr))
                                    <div class="colors">
                                        <label>
                                            <span class="swatch" style="background-color:white; text-align:center "> <b>{{$size->value}}</b></span>
                                        </label>
                                    </div>
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    <?php $id_attr = Oder::where('product_id', $cart->products->id)->pluck('color')->toArray(); ?>
                                    @foreach ($list_colors as $color)
                                    @if(in_array($color->id,$id_attr))
                                    <div class="colors">
                                        <label>
                                            <span class="swatch" style="background-color:{{ $color->value }}; "> </span>
                                        </label>
                                    </div>
                                    @endif
                                    @endforeach
                                </td>
                                <td class="shoping__cart__price">
                                    {{number_format($cart->products->unit_price).'$'}}
                                </td>

                                <form action="oder/update/{{$cart->id}}" method="get">
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="quantity" value="{{$cart->quantity}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        {{number_format($cart->products->unit_price * $cart->quantity ).'$'}}
                                    </td>
                                    <td>
                                        <button style="border:none" type="submit">
                                            <img width="40px" src="https://img.icons8.com/cotton/64/000000/update-file.png" />
                                        </button>
                                        <a href="oder/delete/{{$cart->id}}">
                                            <img width="40px" src="https://img.icons8.com/fluency/48/000000/close-window.png" />
                                        </a>
                                    </td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="{{route('shop-fashion')}}" class="primary-btn cart-btn">Tiếp tục mua sắm</a>
                    {{-- <button type="submit" class="primary-btn cart-btn cart-btn-right">
                            <span class="icon_loading"></span>
                            Upadate Cart
                        </button> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Mã giảm giá</h5>
                        <form action="#">
                            <input type="text" placeholder="Nhập mã giảm giá">
                            <button type="submit" class="site-btn">ÁP DỤNG</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Phiếu mua hàng</h5>
                    <ul>
                        @foreach ($list_oders as $oders)
                        <li>
                            {{substr($oders->products->name,0,50)}}
                            <span>
                                {{number_format($oders->products->unit_price).'$' }}
                            </span>
                            <span>x{{$oders->quantity}}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                        </li>
                        @endforeach
                        <li>Tổng
                            <span>
                                <?php $total = 0; ?>
                                @foreach ($list_oders as $oders)
                                <?php $total += $oders->total; ?>
                                @endforeach
                                {{number_format($total).'$'}}
                            </span>
                        </li>
                    </ul>
                    <a href="{{route('check_out')}}" class="primary-btn">Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->
@endsection