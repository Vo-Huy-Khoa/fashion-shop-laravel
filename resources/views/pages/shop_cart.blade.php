@extends('layout.index')
@section('content')
    

    <!-- Breadcrumb Section Begin -->

    <!-- Breadcrumb Section End -->


 
    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>

                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_oders as $cart)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img style="width: 100px; height:100px" src="uploads/products/{{$cart->products->image}}" alt="">
                                        <h5>{{$cart->products->name}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{number_format($cart->products->unit_price).'$'}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{$cart->quantity}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        {{number_format($cart->products->unit_price * $cart->quantity ).'$'}}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
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
                        <a href="{{route('user_shop')}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            @foreach ($list_oders as $oders)
                                <li>{{$oders->products->name}} <span>{{number_format($oders->products->unit_price * $oders->quantity).'$' }}</span></li>
                            @endforeach

                            <li>Total<span>{{number_format($oders->sum('total')).'$'}}</span></li>

                        </ul>
                        <a href="{{route('check_out')}}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
    @endsection



