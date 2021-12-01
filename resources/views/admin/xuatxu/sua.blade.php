@extends('layouts.app')
@section('content')
     <div class="card">
         <div class="card-header">Cập nhật xuất xứ</div>
         <div class="card-body">
             <form action="{{ route('admin.xuatxu.sua',['id'=> $xuatxu->id]) }}" method="post">
                 @csrf
                 
                 <div class="mb-3">
                     <label class="form-label" for="tenxuatxu">Tên nhóm sản phẩm</label>
                     <input type="text" class="form-control @error('tenxuatxu') is-invalid @enderror" id="tenxuatxu" name="tenxuatxu" value="{{$xuatxu->tenxuatxu}}"required />
                     @error('tenxuatxu')
                         <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                     @enderror

                 </div>
                 
                 <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cập Nhật </button>
             </form>
         </div>
     </div>
@endsection