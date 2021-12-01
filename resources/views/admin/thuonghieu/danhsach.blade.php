@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thương hiệu</div>

                <div class="card-body">
                    <a href="{{route('admin.thuonghieu.them')}}" class="btn btn-info mb-2" ><i class="fas fa-plus"></i> Thêm mới</a>
                    <table id="DataList" class="table table-bordered table-hover table-sm " >
                         <thead>
                             <tr>
                                 <th width="5%">#</th>
                                 <th width="35%">Hình ảnh</th>
                                 <th width="30%">Tên thương hiệu</th>
                                 <th width="20%">Tên thương hiệu không dấu</th>
                                 <th width="5%">Sửa</th>
                                 <th width="5%">Xóa</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($thuonghieu as $value)
                                 <tr>
                                     <td>{{ $loop->iteration }}</td>
                                     <td class="text-center"><img src="{{env('APP_URL').'/storage/app/'.$value->hinhanh}}" width="50" height="50"></td>
                                     <td>{{ $value->tenthuonghieu }}</td>
                                     <td>{{ $value->tenthuonghieu_slug }}</td>
                                     <td class="text-center">
                                        <a href="{{ route('admin.thuonghieu.sua', ['id' => $value->id]) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                     <td class="text-center"><a href="{{ route('admin.thuonghieu.xoa', ['id' => $value->id]) }}"><i class="fas fa-trash-alt text-danger"></i></a></td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection