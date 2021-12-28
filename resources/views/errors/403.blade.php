<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang không tồn tại - {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.css')}}">

   <link rel="shortcut icon" href="{{asset('public/images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('public/backend/css/app.css')}}">
</head>

<body>
    <div id="error">

        <div class="container text-center pt-32">
            <h1 class='error-title'>403</h1>
            <p>Bạn không có quyền truy cập</p>
            <a href="{{route('frontend')}}" class='btn btn-primary'>Quay về trang chủ</a>
        </div>

        <div class="footer pt-32">
            <p class="text-center">Bản quyền &copy;<script>document.write(new Date().getFullYear());</script> -Bởi Khang - Trâm - Trang</p>
        </div>
    </div>
</body>

</html>