@extends('layouts.admin')

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Liên Hệ</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Liên Hệ</li>
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
                <a href="{{route('admin.lienhe.them')}}" class="btn btn-info mb-2" ><i class="fas fa-plus"></i> Thêm mới</a>
                <table class='table  table-hover' id="table1">
                    <thead>
                        <tr>
                                 <th width="5%">#</th>
                                 <th width="20%">Họ và tên</th>
                                 <th width="20%">Email</th>
                                 <th width="15%">Số điện thoại</th>
                                 <th width="25%">Nội dung</th>
                                 <th width="5%"></th>
                                 <th width="5%">Xóa</th>
                        </tr>
                    </thead>
                    <tbody >
                         @foreach($lienhe as $value)
                             <tr>
                                 <td>{{ $loop->iteration }}</td>
                                     <td>{{ $value->hovaten }}</td>
                                     <td>{{ $value->email }}</td>
                                     <td>{{ $value->sodienthoai }}</td>
                                     <td>{{ $value->noidung }}</td>
                                 <td class="align-middle text-right">
                          </td>
                          <td>
                              <a href="{{route('admin.lienhe.xoa', ['id' => $value->id])}}" class="btn btn-sm btn-secondary">
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

