@extends('layouts.frontend')

@section('pagetitle')
    Đăng Nhập Khách Hàng
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('public/frontend/images/hero-bg-3.jpg')}}');" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
              <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('frontend')}}">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>Đăng Nhập <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">ĐĂNG NHẬP</h2>
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
                                <div class="col-lg-6 offset-lg-3">
                                    <div class="login-form">
                                       
                                        <form method="post" action="{{ route('login') }}">
                                        @csrf
                                            <div class="group-input">
                                                <label for="username">Tên đăng nhập hoặc Email *</label>
                                                <input type="text" class="form-control form-control-lg{{ ($errors->has('email') || $errors->has('username')) ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" placeholder="Tên đăng nhập hoặc Email" required />

                                                    @if ($errors->has('email') || $errors->has('username'))
                                                      <span class="invalid-feedback">
                                                          <strong><i class="fa fa-exclamation-circle fa-fw"></i> 
                                                          {{ empty($errors->first('email')) ? $errors->first('username') : $errors->first('email') }}
                                                        </strong>
                                                      </span>
                                                    @endif
                                            </div>
                                            <div class="group-input">
                                                <label for="pass">Mật khẩu *</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    <div class="form-control-icon">
                                                        <i data-feather="lock"></i>
                                                    </div>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mt-4">
                                                    <div class="radio">
                                                      <label class="mr-3"><input type="radio" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Lưu mật khẩu</label>
                                                       @if (Route::has('password.request'))
                                        <a class="float-end" href="{{ route('password.request') }}">
                                            <small>Quên mật khẩu đăng nhập?</small>
                                        </a>
                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                              <div class="col-lg-12 offset-lg-2">
                                            <button type="submit" class="btn btn-primary py-3 px-6">Đăng nhập</button>
                                            OR
                                            <a  href="{{ route('google.login') }}" class="btn btn-primary py-3 px-4"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a> </div>
                                        </form>
                                         <div class="text-center">
                                         <a href="{{ route('frontend.dangky') }}" class="or-login text-primary">hoặc Đăng ký</a>
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