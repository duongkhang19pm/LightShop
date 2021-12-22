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
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('frontend')}}">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>đặt hàng <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">ĐẶT HÀNG</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 ftco-animate">
                    <form action="{{ route('frontend.dathang') }}" method="post" class="billing-form" id="checkoutform">
                    @csrf
                        
                        <h3 class="mb-4 billing-heading text-center">THÔNG TIN GIAO HÀNG</h3>
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="firstname">Họ Và Tên</label>
                                    <input type="text" class="form-control" name="name" placeholder="Họ và tên *" value="{{ Auth::user()->name ?? '' }}" required />
                                </div>
                            </div>
                      
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Địa Chỉ</label>
                                    <div class="select-wrap">
                                    <input type="text" class="form-control" name="diachigiaohang" placeholder="Địa chỉ giao hàng *" required />
                                </div>
                                </div>
                            </div>
                        
                      
                       
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                  <input type="text" class="form-control" name="dienthoaigiaohang" placeholder="Điện thoại *" required />
                                </div>
                            </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailaddress">Địa Chỉ Email</label>
                                   <input type="text" class="form-control" name="email" placeholder="Địa chỉ Email *" value="{{ Auth::user()->email ?? '' }}" required />
                                </div>
                            </div>
                        <!-- 
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                                
                                                    @guest
                                                    <div class="form-group">
                                                     <div class="chek-form">
                                                         <div class="custome-checkbox">
                                                         <input type="checkbox" class="form-check-input" name="createaccount" id="createaccount" />
                                                         <label class="form-check-label label_info" for="createaccount"><span>Đăng ký tài khoản?</span></label>
                                                         </div>
                                                     </div>
                                                     </div>
                                                     <div class="form-group create-account">
                                                        <input type="password" class="form-control" placeholder="Mật khẩu" name="password" />
                                                     </div>

                                                    @endguest
                                                    <div class="ship_detail">
                                                         <div class="form-group">
                                                             <div class="chek-form">
                                                                 <div class="custome-checkbox">
                                                                     <input type="checkbox" class="form-check-input" name="differentaddress" id="differentaddress" />
                                                                     <label class="form-check-label label_info" for="differentaddress"><span>Giao hàng tới địa chỉ khác?</span></label>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="different_address">
                                                             <div class="form-group">
                                                                <input type="text" class="form-control" name="name2" placeholder="Họ và tên *" />
                                                             </div>
                                                             <div class="form-group">
                                                                <input type="text" class="form-control" name="diachigiaohang2" placeholder="Địa chỉ giao hàng *" />
                                                             </div>
                                                             <div class="form-group">
                                                                <input type="text" class="form-control" name="dienthoaigiaohang2" placeholder="Điện thoại *" />
                                                             </div>
                                                             <div class="form-group">
                                                                <input type="text" class="form-control" name="email2" placeholder="Địa chỉ Email *" />
                                                             </div>
                                                         </div>
                                                    </div>

                                              
                                </div>
                            </div>-->
                            </div>
                           
                    </form><!-- END -->



                    <div class="row mt-5 pt-3 d-flex">
                        <div class="col-md-6 d-flex">
                            <div class="cart-detail cart-total p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Tổng Tiền Giỏ Hàng</h3>
                                <p class="d-flex">
                                           <span>Tổng Tiền Sản Phẩm</span>
                                    <span>{{ Cart::subtotal() }}<sup>đ</sup></span>
                                        </p>
                                        <p class="d-flex">
                                           <span>Thuế VAT (10%)</span>
                                    <span>{{ Cart::tax() }}<sup>đ</sup></span>
                                        </p>
                                        <p class="d-flex">
                                           <span>Phí Vận Chuyển</span>
                                    <span>Miễn phí vận chuyển</span>
                                        </p>
                                        <hr>
                                        <p class="d-flex total-price">
                                            <span>Tổng thanh toán</span>
                                    <span>{{ Cart::total() }}<sup>đ</sup></span>
                                        </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cart-detail p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Hình Thức Thanh Toán</h3>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                               <label><input type="radio" name="optradio" class="mr-2"> COD</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                               <label><input type="radio" name="optradio" class="mr-2"> Chuyển Khoản Ngân Hàng</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="radio">
                                               <label><input type="radio" name="optradio" class="mr-2"> Ví Điện Tử MoMo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                               <label><input type="checkbox" value="" class="mr-2"> Tôi đã đọc và chấp nhận điều khoản và điều kiện</label>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('frontend.dathang') }}"onclick="event.preventDefault();document.getElementById('checkoutform').submit();"class="btn btn-primary py-3 px-4">TIẾN HÀNH ĐẶT HÀNG</a> 
                            </div>
                                     
                        </div>
                    </div>
                    
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section>

    


@endsection