@extends('layout.index')
@section('content')


    <!-- Breadcrumb Section Begin -->

    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        @if (session('comment'))
        <div style=" text-align:center" class="alert alert-success">
            {{ session('comment') }}
        </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="uploads/products/{{$products->image}}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            @foreach ($list_products_categories as $products)
                                
                            <img data-imgbigurl="uploads/products/{{$products->image}}"
                            src="uploads/products/{{$products->image}}" alt=""> 
     
                            @endforeach
                            


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$products->name}}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">{{number_format($products->unit_price)}} $</div>
                        <p>{{$products->description}}</p>
<style>
    div.size{
        margin-bottom:20px;
    }
    div.size input {
        color: red;
        width: 50px;
        margin-right: 1.5%;
    }
    div.size input:hover{
        background-color: yellow;
    }

</style>            <form action="user/AddToCart_Detail/{{$products->id}}" method="post">
                        @csrf
                        {{-- <div class="size"  >
                            <input type="button" value="S" name>
                            <input type="button" value="M">
                            <input type="button" value="L">
                            <input type="button" value="XL">
                            <input type="button" value="XXL">
                        </div> --}}
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" name="quantity" value="1">
                                </div>
                            </div>
                        </div>
                        <button style="height: 51px; margin-right:5px;" type="submit" class="btn btn-success">ADD TO CARD</button>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>

                    </form>
                        
                        
                        <ul>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">

                    <div class="be-comment-block">
                        <h1 class="comments-title">Comments ({{count($list_comments)}})</h1>
                        @foreach ($list_comments as $comments)
                            
                        
                        <div class="be-comment">
                            <div class="be-img-comment">
                                <a href="">
                                    <img src="uploads/users/{{$comments->users->image}}">
                                </a>
                            </div>
                            <div class="be-comment-content">

                                <span class="be-comment-name">
                                    <a href="">{{$comments->users->first_name." ".$comments->users->last_name}}</a>
                                </span>
                                <span class="be-comment-time">
                                    <i class="fa fa-clock-o"></i>
                                    {{$comments->created_at}}
                                </span>

                                <p class="be-comment-text">
                                    {{$comments->comment}}
                                </p>
                            </div>
                        </div>
                        @endforeach

                        @if (Auth::user())
                        <form action="user/comments/{{$products->id}}" method="POST" class="form-block">
                            @csrf
                            <div class="row">
                                {{-- <div class="col-xs-12 col-sm-6">
                                    <div class="form-group fl_icon">
                                        <div class="icon"><i class="fa fa-user"></i></div>
                                        <input class="form-input" type="text" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 fl_icon">
                                    <div class="form-group fl_icon">
                                        <div class="icon"><i class="fa fa-envelope-o"></i></div>
                                        <input class="form-input" type="text" placeholder="Your email">
                                    </div>
                                </div> --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea style="width: 100%" name="comment" class="form-input" required=""
                                            placeholder="Your text"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Send</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($list_products_categories as $products)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="uploads/products/{{$products->image}}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="user/AddToCart/{{$products->id}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="user/products_details/{{$products->id}}">{{$products->name}}</a></h6>
                            <h5>{{number_format($products->unit_price)}} $</h5>
                        </div>
                    </div>
                </div> 
                @endforeach


            </div>
        </div>
    </section>
    <!-- Related Product Section End -->






@endsection
