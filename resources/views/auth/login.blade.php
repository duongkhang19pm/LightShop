<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>{{ config('app.name', 'Laravel') }}</title>
      <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('public/images/logo.png')}}" type="image/x-icon">
</head>

<body>
<div id="auth">

    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card pt-4">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <img src="{{asset('public/images/logo.png')}}" height="50" class='mb-4'>
                            <h3>Đăng Nhập</h3>
                            
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group position-relative has-icon-left">
                                <label for="email">Tài Khoản</label>
                                <div class="position-relative">
                                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                

                            </div>
                            <div class="form-group position-relative has-icon-left">
                                <div class="clearfix">
                                    <label for="password">Mật Khẩu</label>
                                   

                                    @if (Route::has('password.request'))
                                        <a class="float-end" href="{{ route('password.request') }}">
                                            <small>Quên mật khẩu đăng nhập?</small>
                                        </a>
                                    @endif
                                </div>
                                <div class="position-relative">
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
                              
                            </div>

                            <div class='form-check clearfix my-4'>
                                <div class="checkbox float-start">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox1">Duy trì đăng nhập</label>
                                </div>
                                <div class="float-end">
                                    <a href="{{ route('register') }}">Tạo tài khoản mới ?</a>
                                </div>
                            </div>
                            <div class="clearfix">
                                <button class="btn btn-dark float-end">Đăng Nhập</button>
                            </div>
                        </form>
                        <div class="divider">
                            <div class="divider-text">OR</div>
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

</div>
    <script src="{{asset('public/assets/js/feather-icons/feather.min.js')}}"></script>
     <script src="{{asset('public/assets/js/app.js')}}"></script>

    <script src="{{asset('public/assets/js/main.js')}}"></script>
</body>

</html>




