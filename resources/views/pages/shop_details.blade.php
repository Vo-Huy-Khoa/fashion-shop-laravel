@extends('layout.index')
@section('content')


    <!-- Breadcrumb Section Begin -->

    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="./Front/img/product/details/product-details-1.jpg" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="./Front/img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="./Front/img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="./Front/img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="./Front/img/product/details/thumb-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>Vetgetable’s Package</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">$50.00</div>
                        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam
                            vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet
                            quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">ADD TO CARD</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
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
                        <h1 class="comments-title">Comments (3)</h1>
                        <div class="be-comment">
                            <div class="be-img-comment">
                                <a href="blog-detail-2.html">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""
                                        class="be-ava-comment">
                                </a>
                            </div>
                            <div class="be-comment-content">

                                <span class="be-comment-name">
                                    <a href="blog-detail-2.html">Ravi Sah</a>
                                </span>
                                <span class="be-comment-time">
                                    <i class="fa fa-clock-o"></i>
                                    May 27, 2015 at 3:14am
                                </span>

                                <p class="be-comment-text">
                                    Pellentesque gravida tristique ultrices.
                                    Sed blandit varius mauris, vel volutpat urna hendrerit id.
                                    Curabitur rutrum dolor gravida turpis tristique efficitur.
                                </p>
                            </div>
                        </div>
                        <div class="be-comment">
                            <div class="be-img-comment">
                                <a href="blog-detail-2.html">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""
                                        class="be-ava-comment">
                                </a>
                            </div>
                            <div class="be-comment-content">
                                <span class="be-comment-name">
                                    <a href="blog-detail-2.html">Phoenix, the Creative Studio</a>
                                </span>
                                <span class="be-comment-time">
                                    <i class="fa fa-clock-o"></i>
                                    May 27, 2015 at 3:14am
                                </span>
                                <p class="be-comment-text">
                                    Nunc ornare sed dolor sed mattis. In scelerisque dui a arcu mattis, at maximus eros
                                    commodo. Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis
                                    eleifend lorem non ant. Proin ut ornare lectus, vel eleifend est. Fusce hendrerit dui in
                                    turpis tristique blandit.
                                </p>
                            </div>
                        </div>
                        <div class="be-comment">
                            <div class="be-img-comment">
                                <a href="blog-detail-2.html">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""
                                        class="be-ava-comment">
                                </a>
                            </div>
                            <div class="be-comment-content">
                                <span class="be-comment-name">
                                    <a href="blog-detail-2.html">Cüneyt ŞEN</a>
                                </span>
                                <span class="be-comment-time">
                                    <i class="fa fa-clock-o"></i>
                                    May 27, 2015 at 3:14am
                                </span>
                                <p class="be-comment-text">
                                    Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem
                                    non ant
                                </p>
                            </div>
                        </div>
                        <form action="" method="POST" class="form-block">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
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
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea style="width: 100%" class="form-input" required=""
                                            placeholder="Your text"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <a style="width: 25%;" class="btn btn-primary pull-right">Send</a>

                                    </div>
                                </div>
                            </div>
                        </form>
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
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="./Front/img/product/product-1.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="./Front/img/product/product-2.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="./Front/img/product/product-3.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="./Front/img/product/product-7.jpg">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Crab Pool Security</a></h6>
                            <h5>$30.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->






@endsection
