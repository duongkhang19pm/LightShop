@extends('layouts.frontend')

@section('pagetitle')
    Frontend
@endsection

@section('content')
   <div class="hero-wrap" style="background-image: url('{{asset('public/frontend/images/hero-bg-3.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-8 ftco-animate d-flex align-items-end">
            <div class="text w-100 text-center">
                <h1 class="mb-4"><span>Sản Phẩm - Dịch Vụ</span> Hoàn Hảo <span>Nhất</span>.</h1>
                <p><a href="#" class="btn btn-primary py-2 px-4">Đặt Hàng Ngay</a> <a href="#" class="btn btn-white btn-outline-white py-2 px-4">Tìm Hiểu Thêm</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-intro">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex">
                    <div class="intro d-lg-flex w-100 ftco-animate">
                        <div class="icon">
                            <span class="flaticon-support"></span>
                        </div>
                        <div class="text">
                            <h2>Hỗ Trợ 24/7</h2>
                            <p>Tư Vấn, Sữa Chữa, Lắp Đặt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-1 d-lg-flex w-100 ftco-animate">
                        <div class="icon">
                            <span class="flaticon-cashback"></span>
                        </div>
                        <div class="text">
                            <h2>Trả Hàng</h2>
                            <p>Đổi trả hàng trong vòng 7 ngày!.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="intro color-2 d-lg-flex w-100 ftco-animate">
                        <div class="icon">
                            <span class="flaticon-free-delivery"></span>
                        </div>
                        <div class="text">
                            <h2>Giao hàng miễn phí</h2>
                            <p>Đơn hàng trên 10.000.000 VNĐ.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url('{{asset('public/frontend/images/hero-bg.jpg')}}');">
                    </div>
                    <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
              <div class="heading-section">
                <span class="subheading">GIỚI THIỆU VỀ CHÚNG TÔI</span>
                <h2 class="mb-4">Không Gian Mới</h2>

                <p>LightStore - tự hào là nhà phân phối độc quyền các sản phẩm cao cấp của các thương hiệu đến từ Italy, Spain: Bejorama, Copen Lamp, Sarri, Fede, Farbel, BC SanMichele...... Chúng tôi cam kết mang đến cho Quý khách hàng những sản phẩm chính hãng, những mẫu mã mới nhất với chất lượng cao và giá cả hợp lý"</p>
                <p>TẦM NHÌN: Công ty cổ phần Nhất Sang đầu tư các nguồn lực để trở thành doanh nghiệp dẫn đầu cung cấp các sản phẩm đèn trang trí, đèn chiếu sáng, đồ bày trí cao cấp tại Việt Nam.</p>
                <p class="year">
                    <strong class="number" data-number="100">0</strong>
                    <span> Năm Kinh Doanh</span>
                </p>
              </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section ftco-no-pb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 ">
                        <div class="sort w-100 text-center ftco-animate">
                            <div class="img" style="background-image: url('{{asset('public/frontend/images/den-bg-1.jpg')}}');"></div>
                            <h3>Đèn Chùm</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 ">
                        <div class="sort w-100 text-center ftco-animate">
                            <div class="img" style="background-image: url('{{asset('public/frontend/images/den-bg-2.jpg')}}');"></div>
                            <h3>Đèn Mâm</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 ">
                        <div class="sort w-100 text-center ftco-animate">
                            <div class="img" style="background-image: url('{{asset('public/frontend/images/den-bg-3.jpg')}}');"></div>
                            <h3>Đèn Hiện Đại</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 ">
                        <div class="sort w-100 text-center ftco-animate">
                            <div class="img" style="background-image: url('{{asset('public/frontend/images/den-bg-4.jpg')}}');"></div>
                            <h3>Đèn Bàn</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 ">
                        <div class="sort w-100 text-center ftco-animate">
                            <div class="img" style="background-image: url('{{asset('public/frontend/images/den-bg-5.jpg')}}');"></div>
                            <h3>Đèn Tường</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 ">
                        <div class="sort w-100 text-center ftco-animate">
                            <div class="img" style="background-image: url('{{asset('public/frontend/images/den-bg-6.jpg')}}');"></div>
                            <h3>Đèn Thả</h3>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Dịch vụ của chúng tôi</span>
            <h2>Sản Phẩm</h2>
          </div>
        </div>
                <div class="row">
                
                    @foreach($sanpham as $value)
                    <div class="col-md-3 d-flex">
                        <div class="product ftco-animate">
                         <div class="img d-flex align-items-center justify-content-center" style="background-image: url('{{env('APP_URL').'/storage/app/'.$value->hinhanh}}');">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="{{ route('frontend.giohang.them', ['tensanpham_slug' => $value->tensanpham_slug]) }}" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
                                        
                                        <a href="{{ route('frontend.sanpham_chitiet', ['tensanpham_slug' => $value->tensanpham_slug]) }}" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <h2>{{$value->tensanpham}}</h2>
                                <p class="mb-0"><span class="price"> {{ number_format($value->dongia) }} <sup>đ</sup> </span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <a href="product.html" class="btn btn-primary d-block">Xem Nhiều Hơn <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </section>
  
    <section class="ftco-section testimony-section img" style="background-image: url('{{asset('public/frontend/images/hero-bg-2.jpg')}}');">
        <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Góp Ý Từ Khách Hàng</span>
            <h2 class="mb-3">Khách hàng hài lòng</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Mẫu Mã Đa Dạng, Phong Phú Độ Sáng Của Đèn Chùm Ốp Trần Hoàn Hảo Giúp Tiết Kiệm Điện Năng Tối Đa.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url('{{asset('public/frontend/images/person-1.jpg')}}')"></div>
                        <div class="pl-3">
                            <p class="name">Kim JiSoo</p>
                            <span class="position">Khách hàng tiềm năng</span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Mẫu Mã Đa Dạng, Phong Phú Độ Sáng Của Đèn Chùm Ốp Trần Hoàn Hảo Giúp Tiết Kiệm Điện Năng Tối Đa.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url('{{asset('public/frontend/images/person-2.jpg')}}')"></div>
                        <div class="pl-3">
                            <p class="name">LaLisa</p>
                            <span class="position">Khách hàng tiềm năng</span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Mẫu Mã Đa Dạng, Phong Phú Độ Sáng Của Đèn Chùm Ốp Trần Hoàn Hảo Giúp Tiết Kiệm Điện Năng Tối Đa.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url('{{asset('public/frontend/images/person-3.jpg')}}')"></div>
                        <div class="pl-3">
                            <p class="name">Rose'</p>
                            <span class="position">Khách hàng tiềm năng</span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Mẫu Mã Đa Dạng, Phong Phú Độ Sáng Của Đèn Chùm Ốp Trần Hoàn Hảo Giúp Tiết Kiệm Điện Năng Tối Đa.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url('{{asset('public/frontend/images/person-4.jpg')}}')"></div>
                        <div class="pl-3">
                            <p class="name">Kim Jennie</p>
                            <span class="position">Khách hàng tiềm năng</span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                  <div class="text">
                    <p class="mb-4">Mẫu Mã Đa Dạng, Phong Phú Độ Sáng Của Đèn Chùm Ốp Trần Hoàn Hảo Giúp Tiết Kiệm Điện Năng Tối Đa.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url('{{asset('public/frontend/images/person-2.jpg')}}')"></div>
                        <div class="pl-3">
                            <p class="name">LaLisa</p>
                            <span class="position">Khách hàng tiềm năng</span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


        
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Tin Tức</span>
            <h2>Tin Tức Mới Nhất</h2>
          </div>
        </div>
        <div class="row d-flex">
            @foreach($baiviet as $value)
          <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
            <div class="blog-entry d-flex">
                <a href="blog-single.html" class="block-20 img " style="background-image: url('{{asset('public/frontend/images/image_3.jpg')}}');">
              </a>
              <div class="text p-4 bg-light">
                <div class="meta">
                    <p><span class="fa fa-calendar"></span>{{ $value->ngaydang}}</p>
                </div>
                <h3 class="heading mb-3"><a href="#">{{ $value->tieude }}</a></h3>
                <p>{{ $value->tomtat }}</p>
                <a href="#" class="btn-custom">Xem Thêm <span class="fa fa-long-arrow-right"></span></a>

              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>  
@endsection