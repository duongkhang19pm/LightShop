@extends('layouts.app')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Thương Hiệu</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.thuonghieu')}}">Danh sách Thương Hiệu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cập nhật Thương Hiệu</li>
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
                             <form action="{{ route('admin.thuonghieu.sua',['id'=>$thuonghieu->id]) }}" method="post" enctype="multipart/form-data">
                                 @csrf
                                 
                                 <div class="mb-3">
                                     <label class="form-label" for="tenthuonghieu">Tên thương hiệu</label>
                                     <input type="text" class="form-control @error('tenthuonghieu') is-invalid @enderror" id="tenthuonghieu" name="tenthuonghieu" value="{{$thuonghieu->tenthuonghieu}}"required />
                                     @error('tenthuonghieu')
                                         <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror

                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label" for="hinhanh">Hình ảnh</label>
                                     @if(!empty($thuonghieu->hinhanh))
                                       <img class="d-block rounded" src="{{ env('APP_URL') . '/storage/app/' . $thuonghieu->hinhanh }}" width="100" />
                                         <span class="d-block small text-danger">Bỏ trống nếu muốn giữ nguyên ảnh cũ.</span>
                                    @endif
                                     <input type="file" class="form-control @error('hinhanh') is-invalid @enderror" id="hinhanh" name="hinhanh" value="{{ $thuonghieu->hinhanh }}" />
                                     @error('hinhanh')
                                         <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror

                                 </div>
                                 
                                 <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cập Nhật </button>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> 
   
@endsection