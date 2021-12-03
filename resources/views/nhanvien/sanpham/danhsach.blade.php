@extends('layouts.nhanvien')

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Sản Phẩm</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section" >
        <div class="card">
            <div class="card-header">
                Danh Sách
            </div>
            <div class="card-body "id="table-hover-row">
                <a href="{{route('nhanvien.sanpham.them')}}" class="btn btn-info mb-2" ><i class="fas fa-plus"></i> Thêm mới</a>
                <table class='table  table-hover' id="table1">
                    <thead>
                             <tr>
                                 <th width="5%">#</th>
                                 <th width="15%">Hình ảnh</th>
                                 <th width="30%">Thông Tin Sản Phẩm</th>
                                 <th width="25%">Tên sản phẩm không dấu</th>           
                                 <th width="15%">Số Lượng</th>
                                 <th width="5%">Sửa</th>
                                 <th width="5%">Xóa</th>
                             </tr>
                    </thead>
                    <tbody >
                         @foreach($sanpham as $value)
                             <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-center"><img src="{{env('APP_URL').'/storage/app/'.$value->hinhanh}}" height="70" width="100"></td>
                                <td>
                                    Nhóm Sản Phẩm: {{ $value->NhomSanPham->tennhom }}<br/>
                                    Loại Sản Phẩm: {{ $value->LoaiSanPham->tenloai }}<br/>
                                    Thương Hiệu: {{ $value->ThuongHieu->tenthuonghieu }}<br/>
                                    Xuất Xứ: {{ $value->XuatXu->tenxuatxu }}<br/>
                                    Chất Liệu: {{ $value->ChatLieu->tenchatlieu }}<br/>
                                    Tên Sản Phẩm :{{ $value->tensanpham }}<br/>
                                    Đơn Giá :{{ number_format($value->dongia) }} VNĐ<br/>
                                </td>
                                <td>{{ $value->tensanpham_slug }}</td>
                                <td  class="text-end">{{ $value->soluong }}</td>
                                <td class="align-middle text-right">
                              <a href="{{route('nhanvien.sanpham.sua', ['id' => $value->id])}}" class="btn btn-sm btn-secondary">
                                <i class="fa fa-pencil-alt"></i>
                                <span class="sr-only">Edit</span>
                              </a>
                          </td>
                          <td>
                              <a href="{{route('nhanvien.sanpham.xoa', ['id' => $value->id])}}" class="btn btn-sm btn-secondary">
                                <i class="far fa-trash-alt"></i>
                                <span class="sr-only">Remove</span>
                              </a>
                            </td>
                             </tr>
                         @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

@endsection