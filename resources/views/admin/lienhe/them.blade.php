@extends('layouts.admin')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Liên Hệ</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.lienhe')}}">Danh sách Liên Hệ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thêm Liên Hệ</li>
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
                            <form action="{{ route('admin.lienhe.them') }}" method="post">
                             @csrf
                                 <div class="mb-3">
                                     <label class="form-label" for="hovaten">Họ và tên</label>
                                     <input type="text" class="form-control @error('hovaten') is-invalid @enderror" id="hovaten" name="hovaten" value="{{ old('hovaten') }}"required />
                                     @error('hovaten')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                     <label class="form-label" for="email">Email</label>
                                     <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"required />
                                     @error('email')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                     <label class="form-label" for="sodienthoai">Số điện thoại</label>
                                     <input type="text" class="form-control @error('sodienthoai') is-invalid @enderror" id="sodienthoai" name="sodienthoai" value="{{ old('sodienthoai') }}"required />
                                     @error('sodienthoai')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                     <label class="form-label" for="noidung">Nội dung</label>
                                     <input type="text" class="form-control @error('noidung') is-invalid @enderror" id="noidung" name="noidung" value="{{ old('noidung') }}"required />
                                     @error('noidung')
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