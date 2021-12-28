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
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('frontend')}}">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>CẬP NHẬT THÔNG TIN <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">CẬP NHẬT THÔNG TIN</h2>
          </div>
        </div>
      </div>
    </section>
 <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-6 offset-lg-3" >
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">CẬP NHẬT</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('khachhang.thongtin.sua',['id'=> $taikhoan->id]) }}" method="post">
                            @csrf
                                  <div class="mb-3">
                                         <label class="form-label" for="name">Họ và tên</label>
                                         <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $taikhoan->name }}" required />
                                         @error('name')
                                             <div class="invalid-feedback"><strong>{{ $message }}</strong>
                                             </div>
                                         @enderror
                                     </div>
                                      <div class="mb-3">
                                         <label class="form-label" for="username">Tên đăng nhập</label>
                                         <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ $taikhoan->username }}" required />
                                         @error('username')
                                             <div class="invalid-feedback"><strong>{{ $message }}</strong>
                                             </div>
                                         @enderror
                                     </div>
                                     <div class="mb-3">
                                         <label class="form-label" for="email">Địa chỉ email</label>
                                         <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $taikhoan->email }}" required />
                                         @error('email')
                                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                         @enderror
                                     </div>
                                     
                                        <div id="change_password_group">
                                            <div class="mb-3">
                                                <label class="form-label" for="password">Mật khẩu mới</label>
                                                 <span class="d-block small text-danger">Bỏ trống nếu muốn giữ nguyên mật khẩu cũ.</span>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" />
                                                @error('password')
                                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                                @enderror
                                            </div>
                                        
                                            <div class="mb-3">
                                                <label class="form-label" for="password_confirmation">Xác nhận mật khẩu mới</label>
                                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" />
                                                @error('password_confirmation')
                                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                                @enderror
                                            </div>
                                        </div>  
                                   
                                    
                                        <button type="submit" class="btn btn-primary me-1 mb-1"> <i class="fa fa-save"></i> Cập Nhật</button>
                                       
                                 
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection