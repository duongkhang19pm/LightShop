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
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.loaisanpham')}}">Danh sách Loại sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thêm Loại sản phẩm</li>
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
                            <form action="{{ route('admin.loaisanpham.them') }}" method="post">
                             @csrf
                                 <div class="mb-3">
                                     <label class="form-label" for="nhomsanpham_id">Nhóm sản phẩm</label>
                                     <select class="form-select @error('nhomsanpham_id') is-invalid @enderror" id="nhomsanpham_id" name="nhomsanpham_id" required>
                                         <option value="">-- Chọn nhóm --</option>
                                         @foreach($nhomsanpham as $value)
                                            <option value="{{ $value->id }}">{{ $value->tennhom }}</option>
                                         @endforeach
                                     </select>
                                    @error('nhomsanpham_id')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label" for="tenloai">Tên loại sản phẩm</label>
                                     <input type="text" class="form-control @error('tenloai') is-invalid @enderror" id="tenloai" name="tenloai" value="{{ old('tenloai') }}"required />
                                     @error('tenloai')
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