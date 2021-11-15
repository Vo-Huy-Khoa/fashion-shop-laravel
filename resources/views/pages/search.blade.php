
@extends('layout.index')

@section('title')
    Search: {{$value}}
@endsection
@section('content')
    


    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                                @foreach ($list_categories as $categories)
                                    <li><a href="user/search/categories/{{$categories->id}}">{{$categories->name}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
                            @foreach ($list_colors as $colors)
                            <div class="sidebar__item__color sidebar__item__color--{{$colors->name}}">
                                <label for="{{$colors->name}}">
                                    {{$colors->name}}
                                    <input type="radio" id="{{$colors->name}}">
                                </label>
                            </div>
                            @endforeach


                        </div>
                        <div class="sidebar__item">
                            <h4>Popular Size</h4>
                            @foreach ($list_sizes as $sizes)
                            <div class="sidebar__item__size">
                                <label for="large">
                                    {{$sizes->name}}
                                    <input type="radio" id="large">
                                </label>
                            </div>  
                            @endforeach


                        </div> --}}
                        <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Latest Products</h4>
                                <div class="latest-product__slider owl-carousel">
                                    <div class="latest-prdouct__slider__item">
                                        @foreach ($list_products_shirt as $shirt)
                                        <a href="user/products_details/{{$shirt->id}}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="uploads/products/{{$shirt->image}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{$shirt->name}}</h6>
                                                <span>{{number_format($shirt->unit_price)}}$</span>
                                            </div>
                                        </a>
                                        @endforeach


                                    </div>
                                    <div class="latest-prdouct__slider__item">
                                        @foreach ($list_products_hoodie as $hoodie)
                                        <a href="user/products_details/{{$hoodie->id}}" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="uploads/products/{{$hoodie->image}}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>{{$hoodie->name}}</h6>
                                                <span>{{number_format($hoodie->unit_price)}}$</span>
                                            </div>
                                        </a>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">

                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span><?php echo count($products_search)  ;?></span> Products found</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($products_search as $products)
                        <div class="col-lg-4 col-md-6 col-sm-6">
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
                                    <h5>{{number_format($products->unit_price)}}$</h5>
                                </div>
                            </div>
                        </div>  
                        @endforeach


                    </div>

                </div>
                {{-- <div class="row" style="display: flex;align-items: center;justify-content: center;">

                    <div class="link">{{$products_search->links('pagination::bootstrap-4') }}</div>
      
                  </div> --}}
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    @endsection
