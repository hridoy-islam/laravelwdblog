<header class="page_header header_darkgrey header_logo_center toggler_right menu_justify">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-left text-md-center">
                <div class="logo_wrapper">

                    <a href="{{route('home')}}" class="logo">
                        <img src="{{asset('images/logo.png')}}" alt="">
                        <span class="logo_text">
                            <span class="highlight">24/7 TOWY</span>
                            <span>Towing Services</span>
                        </span>
                    </a>

                </div>
                <!-- header toggler -->
                <span class="toggle_menu">
                    <span></span>
                </span>
                <!-- main nav start -->
                <nav class="mainmenu_wrapper">
                    <ul class="mainmenu nav sf-menu">
                        <li class="active">
                            <a href="{{route('home')}}">Home</a>

                        </li>

                        <li>
                            <a href="{{route('about')}}">About</a>

                        </li>
                        <!-- eof pages -->

                        <li>
                            <a href="{{route('shop')}}">Shop</a>

                            <!-- eof mega menu -->
                        </li>
                        <!-- eof features -->

                        <!-- blog -->
                        <li>
                            <a href="{{route('blog')}}">Blog</a>

                        </li>
                        <!-- eof blog -->

                        <!-- gallery -->
                        <li>
                            <a href="">Gallery</a>

                        </li>
                        <!-- eof Gallery -->

                        <!-- contacts -->
                        <li>
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
                        <!-- eof contacts -->
                        <li>
                            <a href="{{route('cart')}}">
                            <i class="fa fa-shopping-cart"></i>    Cart
                            </a>
                            <ul>
                                <li>
                                    <a href="{{route('checkout')}}">Checkout</a>
                                </li>

                            </ul>
                        </li>
                        <li> <a href="{{route('customerlogin')}}">Login</a> </li>
                    </ul>
                </nav>
                <!-- eof main nav -->
            </div>
        </div>
    </div>
</header>
