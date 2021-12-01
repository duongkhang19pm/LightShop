@extends('layouts.app')
@section('content')
     <div class="card">
         <div class="card-header">Thêm thương hiệu</div>
         <div class="card-body">
             <form action="{{ route('admin.thuonghieu.them') }}" method="post" enctype="multipart/form-data">
                 @csrf
                 
                 <div class="mb-3">
                     <label class="form-label" for="tenthuonghieu">Tên thuong hieu</label>
                     <input type="text" class="form-control @error('tenthuonghieu') is-invalid @enderror" id="tenthuonghieu" name="tenthuonghieu" value="{{ old('tenthuonghieu') }}"required />
                     @error('tenthuonghieu')
                         <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                     @enderror

                 </div>
                 <div class="mb-3">
                     <label class="form-label" for="hinhanh">Hình ảnh</label>
                     <input type="file" class="form-control @error('hinhanh') is-invalid @enderror" id="hinhanh" name="hinhanh" value="{{ old('hinhanh') }}" />
                     @error('hinhanh')
                         <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                     @enderror

                 </div>
                 
                 <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Thêm </button>
             </form>
         </div>
     </div>
@endsection