<?php

use App\Models\Oder;

$fullUrl = $currentUrl = url()->current();
$users = Auth::user();
$id = Auth::id();
$list_oders = Oder::where('user_id', $id)->where('status', 1)->get();
?>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li>
                                <a style="color: black" href="mailto:huykhoa630@gmail.com">
                                    <i class="fa fa-envelope"></i>
                                    huykhoa630@gmail.com
                                </a>
                            </li>
                            <li>Miễn phí vận chuyển cho những đơn từ 200k!</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="https://www.facebook.com/vohuykhoa18/"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        @if(!isset($users))
                        <div class="header__top__right__auth">
                            <a href="{{route('user-register')}}"><i class="fa fa-user"></i>Đăng ký</a>
                        </div>
                        <span>&nbsp;&nbsp;</span>
                        <div class="header__top__right__auth">
                            <a href="{{route('user-login')}}"><i class="fa fa-user"></i>Đăng nhập</a>
                        </div>
                        @else
                        <div class="header__top__right__auth">
                            <a href="profile-edit/{{$users->id}}"><i class="fa fa-user"></i>{{$users->first_name." ".$users->last_name}}</a>
                        </div>
                        <span>&nbsp;&nbsp;</span>
                        <div class="header__top__right__auth">
                            <a href="{{route('user-logout')}}"><i class="fa fa-sign-out"></i>Đăng xuất</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="/home"><img src="./Front/img/logo.png" alt="fashion"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li><a href="/home"class="{{str_contains($fullUrl, 'home') ? "selected" : ""}}">Trang chủ</a></li>
                        <li><a href="{{route('shop-fashion')}}" class="{{str_contains($fullUrl, 'shop') ? "selected" : ""}}{{str_contains($fullUrl, 'search-classify') ? "selected" : ""}}">Cửa hàng</a></li>
                        <li><a href="{{route('user_blog')}}" class="{{str_contains($fullUrl, 'blog') ? "selected" : ""}}">Bài viết</a></li>
                        <li><a href="{{route('user_contact')}}"class="{{str_contains($fullUrl, 'contact') ? "selected" : ""}}" >Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                        <li><a href="{{route('show-cart')}}"><i class="fa fa-shopping-bag"></i> <span>{{count($list_oders)}}</span></a></li>
                    </ul>
                    <?php $total = 0; ?>
                    @foreach ($list_oders as $oders)
                    <?php $total += $oders->total; ?>
                    @endforeach
                    <div class="header__cart__price">Tổng:
                        <span style="color: red">{{number_format($total).'$'}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>

