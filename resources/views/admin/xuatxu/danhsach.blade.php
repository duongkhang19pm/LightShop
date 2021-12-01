@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Xuát xứ</div>

                <div class="card-body">
                    <a href="{{route('admin.xuatxu.them')}}" class="btn btn-info mb-2" ><i class="fas fa-plus"></i> Thêm mới</a>
                    <table id="DataList" class="table table-bordered table-hover table-sm " >
                         <thead>
                             <tr>
                                 <th width="5%">#</th>
                                 <th width="20%">Tên xuất xứ</th>
                                 <th width="20%">Tên xuất xứ không dấu</th>
                                 <th width="5%">Sửa</th>
                                 <th width="5%">Xóa</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach($xuatxu as $value)
                                 <tr>
                                     <td>{{ $loop->iteration }}</td>
                                     <td>{{ $value->tenxuatxu }}</td>
                                     <td>{{ $value->tenxuatxu_slug }}</td>
                                     <td class="text-center">
                                        <a href="{{ route('admin.xuatxu.sua', ['id' => $value->id]) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                     <td class="text-center"><a href="{{ route('admin.xuatxu.xoa', ['id' => $value->id]) }}"><i class="fas fa-trash-alt text-danger"></i></a></td>
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