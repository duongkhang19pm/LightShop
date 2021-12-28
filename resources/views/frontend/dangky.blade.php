@extends('layouts.frontend')

@section('pagetitle')
    Đăng Ký Tài khoản
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('public/frontend/images/hero-bg-3.jpg')}}');" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
              <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('frontend')}}">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>Đăng Ký <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">ĐĂNG KÝ</h2>
              </div>
            </div>
          </div>
    </section>


    <!-- Register Section Begin -->
     <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 ftco-animate">
                    <div class="register-login-section spad">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-form">
                                       
                                        <form method="POST" action="{{ route('register') }}">
                                         @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="first-name-column">Họ Và Tên</label>
                                                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label for="last-name-column">Địa Chỉ Email</label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="username-column">Mật Khẩu</label>
                                                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Nhập Lại Mật Khẩu</label>
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>
                                           
                                        </diV>
                                        <div class="text-center">
                                            <a  href="{{ route('login') }}">Đã có tài khoản ? Đăng nhập</a>
                                        </div>
                                        
                                         
                                        <div class=" text-center">
                                            <button type="submit" class="btn btn-lg btn-dark  ">Đăng Ký</button>
                                        </div>
                                        
                                    </form>
                                         <div class="divider">
                                        <div class="divider-text text-center">OR</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i>
                                                Facebook</button>
                                        </div>
                                       <div class="col-sm-6">
                                        <button class="btn btn-block mb-2 btn-danger"><i data-feather="mail"></i>
                                            Gmail</button>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
           </div> <!-- .col-md-8 -->
            
        </div>
    </section>

    <!-- Register Form Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->
@endsection