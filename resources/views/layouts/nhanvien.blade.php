<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('public/backend/vendors/chartjs/Chart.min.css')}}">

    <link rel="stylesheet" href="{{asset('public/backend/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('public/backend/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('public/images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header" href="{{ route('nhanvien.home') }}">
                    <img src="{{asset('public/images/logo.png')}}" alt="" srcset="">
                   {{ config('app.name', 'Laravel') }}
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class='sidebar-title'>Main Menu</li>



                        <li class="sidebar-item active ">
                            <a href="{{ route('nhanvien.home') }}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>

                        </li>

                        @guest
                            @if (Route::has('login'))
                                
                                 <li class="sidebar-item  ">
                                    <a href="{{ route('login') }}" class='sidebar-link'>
                                        <i data-feather="layout" width="20"></i>
                                        <span>????ng nh???p</span>
                                    </a>
                                 </li>
                            @endif
                            @if (Route::has('register'))
                                  <li class="sidebar-item  ">
                                        <a href="{{ route('register') }}" class='sidebar-link'>
                                            <i data-feather="layout" width="20"></i>
                                            <span>????ng k??</span>
                                        </a>
                                 </li>
                               
                            @endif
                        @else

                      

                        <li class='sidebar-title'>Qu???n L??</li>

                        


                       

                       
                        
                         <li class="sidebar-item  ">
                            <a href="{{route('nhanvien.sanpham')}}" class='sidebar-link'>
                                <i data-feather="layout" width="20"></i>
                                <span>S???n ph???m</span>
                            </a>

                        </li>
                         <li class="sidebar-item  ">
                            <a href="{{route('nhanvien.donhang')}}" class='sidebar-link'>
                                <i data-feather="layout" width="20"></i>
                                <span>????n h??ng</span>
                            </a>

                        </li>
                         <li class="sidebar-item  ">
                            <a href="{{route('nhanvien.lienhe')}}" class='sidebar-link'>
                                <i data-feather="layout" width="20"></i>
                                <span>Li??n h???</span>
                            </a>

                        </li>


                        <li class='sidebar-title'>B??i Vi???t</li>

                        

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i>
                                <span>Qu???n l?? B??i vi???t</span>
                            </a>

                            <ul class="submenu ">

                               

                                <li>
                                    <a href="{{route('nhanvien.baiviet')}}">B??i Vi???t</a>
                                </li>

                                
                            </ul>

                        </li>


                        @endguest





                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                         @guest
                         @else

                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <!--<div class="avatar me-1">
                                    <img src="backend/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                            -->
                                <div class="d-none d-md-block d-lg-inline-block">{{ Auth::user()->name }}</div>
                                ( Quy???n H???n: {{ Auth::user()->role }} )
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> ?????i m???t kh???u</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> L???ch s??? mua h??ng</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i data-feather="log-out"></i> ????ng Xu???t</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid">
                @yield('content')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted ">
                    <div class="text-center">
                        <p>B???n quy???n &copy; {{ date('Y') }} b???i Khang - Tr??m - Trang.</p>
                    </div>
                    
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('public/backend/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('public/backend/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('public/backend/js/app.js')}}"></script>

    <script src="{{asset('public/backend/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('public/backend/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('public/backend/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('public/backend/js/main.js')}}"></script>
</body>

</html>