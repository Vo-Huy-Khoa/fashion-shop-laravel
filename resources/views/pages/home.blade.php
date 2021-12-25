    @extends('layout.index')
@section('title')
    Home
@endsection
@section('content')
            <!-- Categories Section Begin -->
            @if (session('logout'))
                <div class="alert alert-success">
                    {{ session('logout') }}
                </div>
            @endif
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($list_categories as $categories)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="uploads/categories/{{$categories->image}}">
                            <h5><a href="search/categories/{{$categories->id}}">{{$categories->name}}</a></h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach ($list_classify as $classify)
                                <li data-filter="{{".".$classify->name}}">{{$classify->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($list_products as $products)
                <div class="col-lg-3 col-md-4 col-sm-6 mix {{" ".$products->categories->classify->name." "}}">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="uploads/products/{{$products->image}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="product-detail/{{$products->id}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6 ><a href="product-detail/{{$products->id}}">{{$products->name}}</a></h6>
                            <h5>{{number_format($products->unit_price).'$'}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row" style="display: flex;align-items: center;justify-content: center;">
                <div class="link">{{$list_products->links('pagination::bootstrap-4') }}</div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="./Front/img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="./Front/img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($list_products_shirt as $shirt)
                                <a href="product-detail/{{$shirt->id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="uploads/products/{{$shirt->image}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$shirt->name}}</h6>
                                        <span>${{number_format($shirt->unit_price)}}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach ($list_products_au as $au)
                                <a href="product-detail/{{$au->id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="uploads/products/{{$au->image}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$au->name}}</h6>
                                        <span>${{number_format($au->unit_price)}}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($list_products_hoodie as $hoodie)
                                <a href="product-detail/{{$hoodie->id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="uploads/products/{{$hoodie->image}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$hoodie->name}}</h6>
                                        <span>${{number_format($hoodie->unit_price)}}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach ($list_products_somi as $somi)
                                <a href="product-detail/{{$somi->id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="uploads/products/{{$somi->image}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$somi->name}}</h6>
                                        <span>${{number_format($somi->unit_price)}}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($list_products_shoe as $shoe)
                                <a href="product-detail/{{$shoe->id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="uploads/products/{{$shoe->image}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$shoe->name}}</h6>
                                        <span>${{number_format($shoe->unit_price)}}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                                @foreach ($list_products_shoe as $shoe)
                                <a href="product-detail/{{$shoe->id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="uploads/products/{{$shoe->image}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$shoe->name}}</h6>
                                        <span>${{number_format($shoe->unit_price)}}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($list_blogs_home as $blogs)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img style="width: 20px ;height:400px" src="uploads/blogs/{{$blogs->image}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i>{{$blogs->created_at}}</li>
                            </ul>
                            <h5><a href="blog-detail/{{$blogs->id}}">{{$blogs->title}}</a></h5>
                            <p>{{$blogs->brief}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row" style="display: flex;align-items: center;justify-content: center;">
                 <div class="link">{{$list_blogs_home->links('pagination::bootstrap-4') }}</div>
            </div>
        </div>
    </section>
    @endsection


