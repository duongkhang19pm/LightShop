@extends('layouts.admin')

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Thương hiệu</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thương hiệu</li>
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
                <a href="{{route('admin.thuonghieu.them')}}" class="btn btn-info mb-2" ><i class="fas fa-plus"></i> Thêm mới</a>
                <a href="#nhap" class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#importModal"><i class="fas fa-upload"></i> Nhập từ Excel</a>
                <a href="{{ route('admin.thuonghieu.xuat') }}" class="btn btn-success mb-2"><i class="fas fa-download"></i> Xuất ra Excel</a>
                <table class='table  table-hover' id="table1">
                    <thead>
                        <tr class="text-center">
                            <th width="5%">#</th>
                            <th width="25%">Hình ảnh</th>
                            <th width="30%">Tên thương hiệu</th>
                            <th width="30%">Tên thương hiệu không dấu</th>
                            <th width="5%">Sửa</th>
                            <th width="5%">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach($thuonghieu as $value)
                             <tr class="text-center">
                                 <td>{{ $loop->iteration }}</td>
                                  <td class="text-center"><img src="{{env('APP_URL').'/storage/app/'.$value->hinhanh}}" height="70" width="100" class="img-thumbnail"></td>
                                 <td>{{ $value->tenthuonghieu }}</td>
                                 <td>{{ $value->tenthuonghieu_slug }}</td>
                                 <td class="align-middle text-right">
                                    <a href="{{route('admin.thuonghieu.sua', ['id' => $value->id])}}" class="btn btn-sm btn-secondary">
                                    <i class="fa fa-pencil-alt"></i>
                                    <span class="sr-only">Edit</span> 
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('admin.thuonghieu.xoa', ['id' => $value->id])}}" class="btn btn-sm btn-secondary">
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
<form action="{{ route('admin.thuonghieu.nhap') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="importModalLabel">Nhập từ Excel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-0">
                            <label for="file_excel" class="form-label">Chọn tập tin Excel</label>
                            <input type="file" class="form-control" id="file_excel" name="file_excel" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Hủy bỏ</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-upload"></i> Nhập dữ liệu</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection