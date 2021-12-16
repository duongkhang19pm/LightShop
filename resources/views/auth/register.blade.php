<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>{{ config('app.name', 'Laravel') }}</title>
      <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('public/backend/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('public/images/logo.png')}}" type="image/x-icon">
</head>

<body>
<div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="{{asset('public/images/logo.png')}}" height="50" class='mb-4'>
                                <h3>Đăng Ký</h3>
                                
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
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
                                    <div class="col-md-6 col-12">
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

                                <a href="{{ route('login') }}">Đã có tài khoản ? Đăng nhập</a>
                                <div class="clearfix">
                                    <button class="btn btn-dark float-end">Đăng Ký</button>
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
    <script src="{{asset('public/backend/js/feather-icons/feather.min.js')}}"></script>
     <script src="{{asset('public/backend/js/app.js')}}"></script>

    <script src="{{asset('public/backend/js/main.js')}}"></script>
</body>

</html>

