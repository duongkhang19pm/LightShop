    @extends('layouts.khachhang')

@section('pagetitle')
    Frontend
@endsection

@section('content')
   <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('public/frontend/images/hero-bg-3.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('frontend')}}">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>khách hàng <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">{{ $taikhoan->name }}</h2>
          </div>
        </div>
      </div>
    </section>
@if (session('status'))
        <div class="alert alert-danger" role="alert">
            {!! session('status') !!}
        </div>
    @endif
     <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{asset('public/frontend/images/image-9.jpg')}}" class="image-popup prod-img-bg"><img src="{{asset('public/frontend/images/image-9.jpg')}}" class="img-fluid"  alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{ $taikhoan->name }}</h3>

                    <div class="rating d-flex">
                            <p class="text-left mr-4">
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                            </p>
                        </div>
                        <p>Tên đăng nhập: {{ $taikhoan->username }} </p>
                        <p>Địa chỉ email: {{ $taikhoan->email }}</p>
                <div class="row">
                    <p><a href="{{route('khachhang.thongtin.sua',['id'=>$taikhoan->id])}}" class="btn btn-primary py-3 px-3 mr-3">Cập nhật thông tin</a></p>
                    <p><a href="{{route('khachhang.donhang',['id'=>$taikhoan->id])}}" class="btn btn-primary py-3 px-3 mr-3">Đơn hàng của tôi</a></p>
                </div>
            
                </div>
            </div>
        </div>
    </section>

        
  
@endsection