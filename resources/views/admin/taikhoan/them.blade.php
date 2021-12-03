@extends('layouts.admin')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Nhóm Sản Phẩm</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.taikhoan')}}">Danh sách tài khoản</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thêm tài khoản</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">THÊM</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('admin.taikhoan.them') }}" method="post">
                             @csrf
                                    <div class="mb-3">
                                         <label class="form-label" for="name">Họ và tên</label>
                                         <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required />
                                         @error('name')
                                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                         @enderror
                                     </div>
                                     <div class="mb-3">
                                         <label class="form-label" for="username">Tên đăng nhập</label>
                                         <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" required />
                                         @error('username')
                                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                         @enderror
                                     </div>
                                     <div class="mb-3">
                                         <label class="form-label" for="email">Địa chỉ email</label>
                                         <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required />
                                         @error('email')
                                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                         @enderror
                                     </div>
                                     
                                     <div class="mb-3">
                                         <label class="form-label" for="role">Quyền hạn</label>
                                         <select class="form-select @error('role') is-invalid @enderror" id="role" name="role" required>
                                         <option value="">-- Chọn --</option>
                                         <option value="admin">Quản trị viên</option>
                                         <option value="nhanvien" >Nhân Viên</option>
                                         <option value="user" selected>Khách hàng</option>
                                         </select>
                                        @error('role')
                                            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                         @enderror
                                     </div>
                                     
                                     <div class="mb-3">
                                     <label class="form-label" for="password">Mật khẩu mới</label>
                                     <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required />
                                     @error('password')
                                     <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                     </div>
                                     
                                     <div class="mb-3">
                                     <label class="form-label" for="password_confirmation">Xác nhận mật khẩu mới</label>
                                     <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required />
                                     @error('password_confirmation')
                                     <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                     </div>
                                   
                                    
                                        <button type="submit" class="btn btn-primary me-1 mb-1"> <i class="fas fa-save"></i> Thêm</button>
                                       
                                 
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>  
@endsection