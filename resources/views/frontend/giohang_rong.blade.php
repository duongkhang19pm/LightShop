@extends('layouts.frontend')
@section('title', 'Giỏ hàng')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('public/frontend/images/hero-bg-3.jpg')}}');" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
              <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>Giỏ Hàng <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">GIOR HÀNG CỦA TÔI</h2>
              </div>
            </div>
          </div>
    </section>

    <div class="homepage-slider">
<!-- error section -->
        <div class="full-height-section error-section">
            <div class="full-height-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <div class="error-text">
                                <i class="fa fa-shopping-cart"></i>
                                <h1>GIỎ HÀNG CHƯA CÓ SẢN PHẨM!</h1>
                                <p>Giỏ hàng của bạn đang rỗng, xin hãy lấp đầy nó bằng việc duyệt qua các sản phẩm của cửa hàng và bỏ vào giỏ các sản phẩm mà bạn yêu thích và có ý định sẽ sở hữu nó.</p>
                                <a href="{{ route('frontend') }}" class="boxed-btn">Tiếp tục mua hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end error section -->
@endsection