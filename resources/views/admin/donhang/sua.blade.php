@extends('layouts.admin')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Loại Sản Phẩm</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.loaisanpham')}}">Danh sách Đơn Hàng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cập nhật Đơn Hàng</li>
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
                            <form action="{{ route('admin.donhang.sua',['id'=> $donhang->id]) }}" method="post">
                            @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="dienthoaigiaohang">Điện thoại giao hàng</label>
                                    <input type="text" class="form-control @error('dienthoaigiaohang') is-invalid @enderror" id="dienthoaigiaohang" name="dienthoaigiaohang" value="{{ $donhang->dienthoaigiaohang }}" required />
                                    @error('dienthoaigiaohang')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                    @enderror
                                </div>


                                 <div class="mb-3">
                                     <label class="form-label" for="diachigiaohang">Địa chỉ giao hàng</label>
                                     <input type="text" class="form-control @error('diachigiaohang') is-invalid @enderror" id="diachigiaohang" name="diachigiaohang" value="{{ $donhang->diachigiaohang }}" required />
                                    @error('diachigiaohang')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                    @enderror

                                 </div>
                                 <div class="mb-3">
                                    <label class="form-label" for="tinhtrang_id">Tình trạng đơn hàng</label>
                                    <select class="form-select @error('tinhtrang_id') is-invalid @enderror" id="tinhtrang_id" name="tinhtrang_id" required>
                                        <option value="">-- Chọn loại --</option>
                                        @foreach($tinhtrang as $value)
                                            <option value="{{ $value->id }}" {{ ($donhang->tinhtrang_id == $value->id) ? 'selected' : '' }}>{{ $value->tinhtrang }}</option>
                                        @endforeach
                                    </select>
                                    @error('tinhtrang_id')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                    @enderror
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
   
@endsection