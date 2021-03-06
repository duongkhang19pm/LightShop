<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>{{ config('app.name', 'Laravel') }}</title>
     <link rel="shortcut icon" href="{{asset('public/images/logo.png')}}" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup.css')}}">
    
    <link rel="stylesheet" href="{{asset('public/frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">

  </head>
  <body>

    <div class="wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <p class="mb-0 phone pl-md-2">
                            <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>+84 999 999 999</a> 
                            <a href="#"><span class="fa fa-paper-plane mr-1"></span> LightStore@gmail.com</a>
                        </p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-md-end">
                        <div class="social-media mr-4">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                </div>
                <div class="reg">
                    
                      @guest
                        @if (Route::has('login'))
                        <p class="mb-0">
                        <a href="{{ route('frontend.dangnhap') }}">????ng nh???p</a></p>
                        @endif
                      @else
                        <p class="mb-0">
                        <a class="mr-3" href="#">{{ Auth::user()->name }}  </a>
                        <a  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                          @csrf
                        </form>
                        </p>
                      @endguest


                </div>
                    </div>
                </div>
            </div>
        </div>
    
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="{{route('frontend')}}">Light <span>Store</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{route('frontend')}}" class="nav-link">Trang ch???</a></li>
              <li class="nav-item"><a href="{{route('frontend.gioithieu')}}" class="nav-link">v??? ch??ng t??i</a></li>
              <li class="nav-item"><a href="{{route('frontend.sanpham')}}" class="nav-link">s???n ph???m</a></li>
              <li class="nav-item"><a href="{{route('frontend.baiviet')}}" class="nav-link">B??i Vi???t</a></li>
              <li class="nav-item"><a href="{{route('frontend.lienhe')}}" class="nav-link">Li??n h???</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->
     @yield('content')
   

    <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">Light <span>Store</span></a></h2>
              <p>Ch??ng t??i cam k???t mang ?????n cho Qu?? kh??ch h??ng nh???ng s???n ph???m ch??nh h??ng, nh???ng m???u m?? m???i nh???t v???i ch???t l?????ng cao v?? gi?? c??? h???p l??.</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">T??i kho???n</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>????ng k??</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>????ng nh???p</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Th??ng tin</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>V??? ch??ng t??i</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>S???n Ph???m</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Li??n h???</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Tin t???c</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">K???t n???i</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>FaceBook</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Git Hub</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Zalo</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Gi???i ????p Th???c M???c?</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon fa fa-map marker"></span><span class="text">An Giang University.</span></li>
                    <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+84 999 999 999</span></a></li>
                    <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">LightStore@gmail.com</span></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
        
                <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      B???n quy???n &copy;<script>document.write(new Date().getFullYear());</script> -B???i Khang - Tr??m - Trang
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              </div>
            </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('public/frontend/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('public/frontend/js/google-map.js')}}"></script>
  <script src="{{asset('public/frontend/js/main.js')}}"></script>
    
  </body>
</html>