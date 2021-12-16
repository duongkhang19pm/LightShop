@extends('layouts.admin')

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Bài Viết</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bài Viết</li>
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
                <a href="{{route('admin.baiviet.them')}}" class="btn btn-info mb-2" ><i class="fas fa-plus"></i>Thêm mới</a>

                <table class='table  table-hover' id="table1">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Chủ đề</th>
                            <th>Người đăng</th>
                            <th>Tiêu đề</th>
                            <th>Ngày đăng</th>
                            <th>Lượt Xem</th>
                            <th>Kiểm Duyệt</th>
                            <th width="5%">Sửa</th>
                            <th width="5%">Xóa</th>
                        </tr>
                    </thead>
                    <tbody >
                         @foreach($baiviet as $value)
                             <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->chude->tenchude }}</td>
                                <td>{{ $value->taikhoan->name }}</td>
                                <td>{{ $value->tieude }}</td>
                                <td>{{ $value->ngaydang}}</td>
                                <td>{{ $value->luotxem}}</td>
                            <td class="text-center">
                                @if($value->kiemduyet == 1)
                                    <a href="{{ route('admin.baiviet.kiemduyet', ['id' => $value->id]) }}"><i class="fas fa-check-circle" title="Đã Duyệt"></i></a>
                                @else
                                    <a href="{{ route('admin.baiviet.kiemduyet', ['id' => $value->id]) }}"><i class="fas fa-ban text-danger" title="Chưa Duyệt"></i></a>
                                @endif
                            </td>
                                 <td class="align-middle text-right">
                              <a href="{{route('admin.baiviet.sua', ['id' => $value->id])}}" class="btn btn-sm btn-secondary">
                                <i class="fa fa-pencil-alt"></i>
                                <span class="sr-only">Edit</span>
                              </a>
                          </td>
                          <td>
                              <a href="{{route('admin.baiviet.xoa', ['id' => $value->id])}}" class="btn btn-sm btn-secondary">
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