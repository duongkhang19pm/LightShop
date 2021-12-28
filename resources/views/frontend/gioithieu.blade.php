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
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>Giới Thiệu <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">GIỚI THIỆU</h2>
              </div>
            </div>
          </div>
    </section>
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
        <section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img bg-light" id="section-counter">
        <div class="container">
            <div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text align-items-center">
                <strong class="number" data-number="1000">0</strong>
                <span>KHÁCH HÀNG HÀI LÒNG</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text align-items-center">
                <strong class="number" data-number="100">0</strong>
                <span>SỐ NĂM KINH NGHIỆM</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text align-items-center">
                <strong class="number" data-number="10">0</strong>
                <span>CÁC LOẠI ĐÈN</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text align-items-center">
                <strong class="number" data-number="40">0</strong>
                <span>CÁC CHI NHÁNH</span>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>

   
@endsection