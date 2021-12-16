<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('public/images/logo.png')}}">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('public/assets/css/all.min.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('public/assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('public/assets/css/owl.carousel.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.css')}}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{asset('public/assets/css/meanmenu.min.css')}}">
    <!-- main style -->
    <link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('public/assets/css/responsive.css')}}">

</head>
<body>
    
    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
    
    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo ">
                            <a href="{{route('frontend')}}">
                                <img src="{{asset('public/images/logo.png')}}" width="25%" alt="">
                                <h4 class="text-white">{{ config('app.name', 'Laravel') }}</h4>
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item"><a href="{{route('frontend')}}">Trang chủ</a>
                                </li>
                                <li><a href="about.html">Về chúng tôi</a></li>
                                <li><a href="#">Sản phẩm</a>
                                    <ul class="sub-menu">
                                        <li><a href="404.html">404 page</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                    </ul>
                                </li>
                                <li><a href="news.html">Tin tức</a>
                                </li>
                                <li><a href="contact.html">Liên hệ</a></li>

                                <li>
                                    <div class="header-icons">
                                        
                                        <li><a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a></li>
                                        <li><a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a></li>

                                        @guest
                                            @if (Route::has('login'))
                                                 
                                                    <li><a class="shopping-cart" href="{{ route('login') }}"><i class="fas fa-user"></i></a></li>
                                            
                                            @endif
                                        @else
                                          
                                            <li><a href="#"><i class="fas fa-user"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">{{ Auth::user()->name }}</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i data-feather="log-out"></i> Đăng Xuất</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                                                        @csrf
                                                    </form>
                                                    </li>

                                                    
                                                </ul>
                                            </li>
                                        @endguest
                                        
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    
    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Bạn cần tìm gì ?</h3>
                            <input type="text" placeholder="Từ khóa">
                            <button type="submit">Tìm kiếm <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->
    @yield('content')
    

    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">Về chúng tôi</h2>
                        <p>Chúng tôi cam kết mang đến cho Quý khách hàng những sản phẩm chính hãng, những mẫu mã mới nhất với chất lượng cao và giá cả hợp lý, góp phần làm cho cuộc sống của quý khách ngày càng tốt đẹp hơn</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Địa chỉ</h2>
                        <ul>
                            <li>An Giang University</li>
                            <li>LightStore@student.agu.edu.vn</li>
                            <li>+84 999 999 999</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">LightStore</h2>
                        <ul>
                            <li><a href="{{route('frontend')}}">Trang chủ</a></li>
                            <li><a href="about.html">Về chúng tôi</a></li>
                            <li><a href="services.html">Sản phẩm</a></li>
                            <li><a href="news.html">Tin tức</a></li>
                            <li><a href="contact.html">liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Đăng ký FanPage</h2>
                        <p>Đăng ký danh sách gửi thư của chúng tôi để nhận được các bản cập nhật mới nhất.</p>
                        <form action="index.html">
                            <input type="email" placeholder="Email">
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->
    
    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>Copyrights &copy;  {{ date('Y') }} - bởi <a href="https://github.com/PThanhTram">Khang - Trâm - Trang</a></p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->
    
    <!-- jquery -->
    <script src="{{asset('public/assets/js/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('public/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- count down -->
    <script src="{{asset('public/assets/js/jquery.countdown.js')}}"></script>
    <!-- isotope -->
    <script src="{{asset('public/assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
    <!-- waypoints -->
    <script src="{{asset('public/assets/js/waypoints.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{asset('public/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- mean menu -->
    <script src="{{asset('public/assets/js/jquery.meanmenu.min.js')}}"></script>
    <!-- sticker js -->
    <script src="{{asset('public/assets/js/sticker.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('public/assets/js/main.js')}}"></script>

</body>
</html>