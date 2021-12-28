@extends('layouts.frontend')

@section('pagetitle')
    Frontend
@endsection

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('public/frontend/images/hero-bg-3.jpg')}}');" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
              <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Trang Chủ <i class="fa fa-chevron-right"></i></a></span>Chi Tiết Sản Phẩm <span> <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">CHI TIẾT SẢN PHẨM</h2>
              </div>
            </div>
          </div>
    </section>
      <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{env('APP_URL').'/storage/app/'.$sanpham->hinhanh}}" class="image-popup prod-img-bg"><img src="{{env('APP_URL').'/storage/app/'.$sanpham->hinhanh}}" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{$sanpham->tensanpham}}</h3>
                    <div class="rating d-flex">
                            <p class="text-left mr-4">
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                                <a href="#"><span class="fa fa-star"></span></a>
                            </p>
                        </div>
                    <p class="price"><span>{{ number_format($sanpham->dongia) }} <sup>đ</sup></span></p>
                
            <p><a href="{{ route('frontend.giohang.them', ['tensanpham_slug' => $sanpham->tensanpham_slug]) }}" class="btn btn-primary py-3 px-5 mr-3">Thêm Vào Giỏ</a></p>
                </div>
            </div>




            <div class="row mt-5">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Mô tả</a>

            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            
            <div class="tab-content bg-light" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                <div class="p-4">
                    <h3 class="mb-4">{{$sanpham->tensanpham}}</h3>
                    <p>{{$sanpham->motasanpham}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>

   

 
@endsection