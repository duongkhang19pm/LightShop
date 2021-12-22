@extends('layouts.admin')

@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Đơn Hàng</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đơn Hàng</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-danger" role="alert">
            {!! session('status')!!}
        </div>
    @endif
    <section class="section" >
        <div class="card">
            <div class="card-header">
                Danh Sách Đơn Hàng
            </div>
            <div class="card-body "id="table-hover-row">
                <table class='table  table-hover' id="table1">
                    <thead>
		                     <tr>
                                <th width="5%">#</th>
                                <th width="15%">Khách hàng</th>
                                <th width="50%">Thông tin giao hàng</th>
                               
                                <th width="20%">Tình trạng</th>
                                <th width="5%">Sửa</th>
                                <th width="5%">Xóa</th> 
		                     </tr>
		                 </thead>
                    <tbody >
                         @foreach($donhang as $value)
                             <tr>
                                 <td>{{ $loop->iteration }}</td>
                                  <td>{{ $value->TaiKhoan->name }}</td>
		                           <td>
                                <span class="d-block">Điện thoại: <strong>{{ $value->dienthoaigiaohang }}</strong></span>
                                <span class="d-block">Địa chỉ giao: <strong>{{ $value->diachigiaohang }}</strong></span>
                                 <span class="d-block">Ngày đặt: <strong>{{ $value->created_at->format('d/m/Y H:i:s') }}</strong></span>
                                <span class="d-block">Sản phẩm:</span>
                                <table class="table table-bordered table-hover table-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="15%">Sản phẩm</th>
                                            <th width="5%">SL</th>
                                           
                                            <th width="5%">Đơn giá</th>
                                             <th width="5%">VAT</th>
                                            <th width="10%">Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $tongtien = 0; @endphp
                                        @foreach($value->DonHang_ChiTiet as $chitiet)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $chitiet->SanPham->tensanpham }}</td>
                                                <td>{{ $chitiet->soluongban }}</td>
                                                <td class="text-end">{{ number_format($chitiet->SanPham->dongia) }}<sup><u>đ</u></sup></td>
                                                <td class="text-end">{{ number_format($chitiet->SanPham->dongia *0.1) }}<sup><u>đ</u></sup></td>
                                                <td class="text-end">{{ number_format($chitiet->dongiaban) }}<sup><u>đ</u></sup></td>
                                            </tr>
                                            @php $tongtien += $chitiet->soluongban * $chitiet->dongiaban; @endphp
                                        @endforeach
                                        <tr>
                                            <td colspan="5">Tổng tiền sản phẩm:</td>
                                            <td class="text-end"><strong>{{ number_format($tongtien) }}</strong><sup><u>đ</u></sup></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td>
                                @if($value->tinhtrang_id == 10)
                                
                                    {{$value->TinhTrang->tinhtrang}}
                                
                                @else
                                
                                    <select id="tinhtrang_id"  onchange="document.location.href = '{{route('admin.donhang.tinhtrang',['id' => $value->id, 'tinhtrang_id' => '1' ])}}'+ this.options[this.selectedIndex].value;">

                                    @if ($value->tinhtrang_id == 1)
                                    
                                        <option value="1" selected>Đơn hàng mới</option>
                                        <option value="2">Đang xác nhân </option>
                                        <option value="3" >Đã xác nhân</option>
                                        <option value="4" >Đã hủy</option>
                                        <option value="5" >Đang đóng gói</option>
                                        <option value="6" >Đang chuyển</option>
                                        <option value="7" >Thất bại</option>
                                        <option value="8" >Đang chuyển hoàn</option>
                                        <option value="9" >Đã chuyển hoàn</option>
                                        <option value="10" >Thành công</option>

                                    

                                        @else @if ($value->tinhtrang_id == 2)
                                        


                                            <option value="1" >Đơn hàng mới</option>
                                            <option value="2" selected>Đang xác nhân </option>
                                            <option value="3" >Đã xác nhân</option>
                                            <option value="4" >Đã hủy</option>
                                            <option value="5" >Đang đóng gói</option>
                                            <option value="6" >Đang chuyển</option>
                                            <option value="7" >Thất bại</option>
                                            <option value="8" >Đang chuyển hoàn</option>
                                            <option value="9" >Đã chuyển hoàn</option>
                                            <option value="10" >Thành công</option>
                                        
                                            @else @if ($value->tinhtrang_id == 3)
                                            


                                                <option value="1" >Đơn hàng mới</option>
                                                <option value="2" >Đang xác nhân </option>
                                                <option value="3" selected>Đã xác nhân</option>
                                                <option value="4" >Đã hủy</option>
                                                <option value="5" >Đang đóng gói</option>
                                                <option value="6" >Đang chuyển</option>
                                                <option value="7" >Thất bại</option>
                                                <option value="8" >Đang chuyển hoàn</option>
                                                <option value="9" >Đã chuyển hoàn</option>
                                                <option value="10" >Thành công</option>

                                            
                                                @else @if ($value->tinhtrang_id == 4)
                                                


                                                    <option value="1" >Đơn hàng mới</option>
                                                    <option value="2" >Đang xác nhân </option>
                                                    <option value="3" >Đã xác nhân</option>
                                                    <option value="4" selected>Đã hủy</option>
                                                    <option value="5" >Đang đóng gói</option>
                                                    <option value="6" >Đang chuyển</option>
                                                    <option value="7" >Thất bại</option>
                                                    <option value="8" >Đang chuyển hoàn</option>
                                                    <option value="9" >Đã chuyển hoàn</option>
                                                    <option value="10" >Thành công</option>

                                                
                                                    @else @if ($value->tinhtrang_id == 5)
                                                    


                                                        <option value="1" >Đơn hàng mới</option>
                                                        <option value="2" >Đang xác nhân </option>
                                                        <option value="3" >Đã xác nhân</option>
                                                        <option value="4" >Đã hủy</option>
                                                        <option value="5" selected>Đang đóng gói</option>
                                                        <option value="6" >Đang chuyển</option>
                                                        <option value="7" >Thất bại</option>
                                                        <option value="8" >Đang chuyển hoàn</option>
                                                        <option value="9" >Đã chuyển hoàn</option>
                                                        <option value="10" >Thành công</option>

                                                    
                                                        @else @if ($value->tinhtrang_id == 6)
                                                        


                                                            <option value="1" >Đơn hàng mới</option>
                                                            <option value="2" >Đang xác nhân </option>
                                                            <option value="3" >Đã xác nhân</option>
                                                            <option value="4" >Đã hủy</option>
                                                            <option value="5" >Đang đóng gói</option>
                                                            <option value="6" selected>Đang chuyển</option>
                                                            <option value="7" >Thất bại</option>
                                                            <option value="8" >Đang chuyển hoàn</option>
                                                            <option value="9" >Đã chuyển hoàn</option>
                                                            <option value="10" >Thành công</option>

                                                        
                                                            @else @if ($value->tinhtrang_id == 7)
                                                            


                                                                <option value="1" >Đơn hàng mới</option>
                                                                <option value="2" >Đang xác nhân </option>
                                                                <option value="3" >Đã xác nhân</option>
                                                                <option value="4" >Đã hủy</option>
                                                                <option value="5" >Đang đóng gói</option>
                                                                <option value="6" >Đang chuyển</option>
                                                                <option value="7" selected>Thất bại</option>
                                                                <option value="8" >Đang chuyển hoàn</option>
                                                                <option value="9" >Đã chuyển hoàn</option>
                                                                <option value="10" >Thành công</option>

                                                            
                                                                @else @if ($value->tinhtrang_id == 8)
                                                                


                                                                    <option value="1" >Đơn hàng mới</option>
                                                                    <option value="2" >Đang xác nhân </option>
                                                                    <option value="3" >Đã xác nhân</option>
                                                                    <option value="4" >Đã hủy</option>
                                                                    <option value="5" >Đang đóng gói</option>
                                                                    <option value="6" >Đang chuyển</option>
                                                                    <option value="7" >Thất bại</option>
                                                                    <option value="8" selected>Đang chuyển hoàn</option>
                                                                    <option value="9" >Đã chuyển hoàn</option>
                                                                    <option value="10" >Thành công</option>

                                                                
                                                                    @else @if ($value->tinhtrang_id == 9)
                                                                    


                                                                        <option value="1" >Đơn hàng mới</option>
                                                                        <option value="2" >Đang xác nhân </option>
                                                                        <option value="3" >Đã xác nhân</option>
                                                                        <option value="4" >Đã hủy</option>
                                                                        <option value="5" >Đang đóng gói</option>
                                                                        <option value="6" >Đang chuyển</option>
                                                                        <option value="7" >Thất bại</option>
                                                                        <option value="8" >Đang chuyển hoàn</option>
                                                                        <option value="9" selected>Đã chuyển hoàn</option>
                                                                        <option value="10" >Thành công</option>

                                                                    
                                                                        @else @if ($value->tinhtrang_id == 10)
                                                                        


                                                                            <option value="1" >Đơn hàng mới</option>
                                                                            <option value="2" >Đang xác nhân </option>
                                                                            <option value="3" >Đã xác nhân</option>
                                                                            <option value="4" >Đã hủy</option>
                                                                            <option value="5" >Đang đóng gói</option>
                                                                            <option value="6" >Đang chuyển</option>
                                                                            <option value="7" >Thất bại</option>
                                                                            <option value="8" >Đang chuyển hoàn</option>
                                                                            <option value="9" >Đã chuyển hoàn</option>
                                                                            <option value="10" selected>Thành công</option>

                                                                        
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                </select>   
                                
                                 @endif

                                
                                    
                            </td>
                            
                                 <td class="align-middle text-right">
                              <a href="{{route('admin.donhang.sua', ['id' => $value->id])}}" class="btn btn-sm btn-secondary">
                                <i class="fa fa-pencil-alt"></i>
                                <span class="sr-only">Edit</span>
                              </a>
                          </td>
                          <td>
                              <a href="{{route('admin.donhang.xoa', ['id' => $value->id])}}" class="btn btn-sm btn-secondary">
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
<script type="text/javascript"></script>>
@endsection