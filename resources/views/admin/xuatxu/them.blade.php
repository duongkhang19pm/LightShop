@extends('layouts.app')
@section('content')
     <div class="card">
         <div class="card-header">Thêm xuất xứ</div>
         <div class="card-body">
             <form action="{{ route('admin.xuatxu.them') }}" method="post">
                 @csrf
                 
                 <div class="mb-3">
                     <label class="form-label" for="tenxuatxu">Tên xuất xứ</label>
                     <input type="text" class="form-control @error('tenxuatxu') is-invalid @enderror" id="tenxuatxu" name="tenxuatxu" value="{{ old('tenxuatxu') }}"required />
                     @error('tenxuatxu')
                         <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                     @enderror

                 </div>
                 
                 <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Thêm </button>
             </form>
         </div>
     </div>
@endsection