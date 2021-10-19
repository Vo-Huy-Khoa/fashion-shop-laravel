<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> huykhoa630@gmail.com</li>
                            <li>Free Shipping for all Order of $99</li>
                            

                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <?php $users = Auth::user(); ?>
                        @if(!isset($users))
                        
                            <div class="header__top__right__auth">
                                <a href="{{route('users_register')}}"><i class="fa fa-user"></i>Register</a>
                            </div>
                            <span>&nbsp;&nbsp;</span>
                            <div class="header__top__right__auth">
                                <a href="{{route('users_login')}}"><i class="fa fa-user"></i>Login</a>
                            </div>
                        
                        @else
                            <div class="header__top__right__auth">
                                <a href="{{route('profile')}}"><i class="fa fa-user"></i>{{$users->name}}</a>
                            </div>
                            <span>&nbsp;&nbsp;</span>
                            <div class="header__top__right__auth">
                                <a href="{{route('users_logout')}}"><i class="fa fa-sign-out"></i>Logout</a>
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
                    <a href="{{route('user_home')}}"><img src="./Front/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{route('user_home')}}">Home</a></li>
                        <li><a href="{{route('user_shop')}}">Shop</a></li>
                        {{-- <li><a href="#">Pages</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="./shop-details.html">Shop Details</a></li>
                                <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                <li><a href="./checkout.html">Check Out</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li> --}}
                        <li><a href="{{route('user_blog')}}">Blog</a></li>
                        <li><a href="{{route('user_contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="{{route('shop_cart')}}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$100.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>