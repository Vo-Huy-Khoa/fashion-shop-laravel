@extends('layout.index')
@section('title')
    Check out
@endsection
@section('content')

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="{{route('shipping')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text" name="first_name" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" name="last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>City<span>*</span></p>
                                <input type="text" name="city">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" name="address" placeholder="Apartment, suite, unite ect (optinal)">
                            </div>
   
                            {{-- <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text">
                            </div> --}}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text" name="notes" placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                <ul>
                                    @foreach ($list_oders as $oders)
                                        <li>
                                            {{substr($oders->products->name,0,25)."..."}}
                                            <span style="color: red"> {{number_format($oders->products->unit_price) }}$ </span>
                                            <span style="color: red; margin-right:15px;"> x{{$oders->quantity }}</span>
                                            <br>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal<span>$0</span></div>
                                <div class="checkout__order__total">Total 
                                    <span>
                                        <?php $total = 0; ?>
                                        @foreach ($list_oders as $oders)
                                        <?php    $total += $oders->total ; ?>
                                        @endforeach
                                        {{number_format($total).'$'}}
                                    </span>
                                </div>
                                <div>
                                    <br><br><br><br>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @endsection

