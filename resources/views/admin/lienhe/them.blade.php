@extends('layouts.app')
@section('content')
     <div class="card">
         <div class="card-header">Thêm liên hệ</div>
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
                 
                 <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Thêm </button>
             </form>
         </div>
     </div>
@endsection