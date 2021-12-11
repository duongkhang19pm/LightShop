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
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.taikhoan')}}">Danh sách tài khoản </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cập nhật tài khoản</li>
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
                        <h4 class="card-title">CẬP NHẬT</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('admin.taikhoan.sua',['id'=> $taikhoan->id]) }}" method="post">
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
                                     
                                     <div class="mb-3">
                                         <label class="form-label" for="role">Quyền hạn</label>
                                         <select class="form-select @error('role') is-invalid @enderror" id="role" name="role" required>
                                             <option value="">-- Chọn --</option>
                                             <option value="admin" {{ ($taikhoan->role == 'admin') ? 'selected' : '' }}>Quản trị viên</option>
                                             <option value="nhanvien" {{ ($taikhoan->role == 'nhanvien') ? 'selected' : '' }}>Nhân Viên</option>
                                             <option value="user" {{ ($taikhoan->role == 'user') ? 'selected' : '' }}>Khách Hàng</option>
                                         </select>
                                        @error('role')
                                         <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                         @enderror
                                     </div>
                                     
                                     <div class="mb-3 form-check">
                                         <input class="form-check-input" type="checkbox" id="change_password_checkbox" name="change_password_checkbox" />
                                         <label class="form-check-label" for="change_password_checkbox">Đổi mật khẩu</label>
                                         </div>
                                         
                                         <div id="change_password_group">
                                             <div class="mb-3">
                                                 <label class="form-label" for="password">Mật khẩu mới</label>
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
                                   
                                    
                                        <button type="submit" class="btn btn-primary me-1 mb-1"> <i class="fas fa-save"></i> Cập Nhật</button>
                                       
                                 
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script>
     $(document).ready(function() {
     $("#change_password_group").hide();
     $("#change_password_checkbox").change(function() {
     if($(this).is(":checked"))
     {
     $("#change_password_group").show();
     $("#change_password_group :input").attr("required", "required");
     }
     else
     {
     $("#change_password_group").hide();
     $("#change_password_group :input").removeAttr("required");
     }
     });
     });
     </script>
@endsection
