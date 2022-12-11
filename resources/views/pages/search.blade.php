@extends('layout.index')
@section('title')
{{$value}}
@endsection
@section('content')
<style>
    .colors label {
        cursor: pointer;
    }

    .colors input {
        display: none;
    }

    .colors input[type="radio"]:checked+.swatch {
        box-shadow: inset 0 0 0 3px wheat;
    }

    .swatch {
        display: inline-block;
        vertical-align: middle;
        height: 30px;
        width: 30px;
        margin: 0 5px 0 0;
        border: 1px solid #d4d4d4;
    }
</style>
<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item">
                        <h4>Danh mục</h4>
                        <ul>
                            @foreach ($list_categories as $categories)
                            <li><a href="search-categories/{{$categories->id}}">{{$categories->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar__item">
                        <h4>Giá</h4>
                        <div class="price-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="540">
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
                    {{-- Color search --}}
                    <h4><b>Màu</b></h4><br>
                    @foreach ($list_colors as $colors)
                    <div class="form-check form-check-inline">
                        <div class="colors">
                            <label>
                                <input type="text" name="color" value="{{ $colors->id }}">
                                <a href="search-color/{{$colors->id}}"> <span class="swatch" style="background-color:{{ $colors->value }}"></span> </a>
                            </label>
                        </div>
                    </div>
                    @endforeach
                    <br><br>
                    {{-- Size search --}}
                    <h4><b>Kích cỡ</b></h4><br>
                    @foreach ($list_sizes as $sizes)
                    <div class="form-check form-check-inline">
                        <div class="colors">
                            <label>
                                <input type="checkbox" name="attribute_id[]" value="{{ $sizes->id }}">
                                <a href="search-size/{{$sizes->id}}"><span class="swatch" style="background-color:white; text-align:center">{{ $sizes->value }}</span></a>
                            </label>
                        </div>
                    </div>
                    @endforeach
                    <br> <br>
                    <div class="sidebar__item">
                        <div class="latest-product__text">
                            <h4>Sản phẩm mới nhất</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($list_products_shirt as $shirt)
                                    <a href="product-detail/{{$shirt->id}}" class="latest-product__item">
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
                                    <a href="product-detail/{{$hoodie->id}}" class="latest-product__item">
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
                                    <span>Sắp xếp</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                @if(isset($products_search))
                                <div class="filter__found">
                                    <h6><span><?php echo count($products_search); ?></span>Sản phẩm được tìm thấy</h6>
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(isset($products_search))
                    <div class="row">
                        @foreach ($products_search as $products)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="uploads/products/{{$products->image}}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="product-detail/{{$products->id}}"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="product-detail/{{$products->id}}"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="product-detail/{{$products->id}}"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="product-detail/{{$products->id}}">{{$products->name}}</a></h6>
                                    <h5>{{number_format($products->unit_price)}}$</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                    @if(isset($list_product_id))
                    <div class="row">
                        @foreach ($list_products as $products)
                        @if (in_array($products->id, $list_product_id))
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="uploads/products/{{$products->image}}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="product-detail/{{$products->id}}/{{$products->id}}"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="product-detail/{{$products->id}}">{{$products->name}}</a></h6>
                                    <h5>{{number_format($products->unit_price)}}$</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
</section>
@endsection