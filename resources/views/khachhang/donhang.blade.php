@extends('layouts.khachhang')

@section('pagetitle')
    Frontend
@endsection

@section('content')
 <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('public/frontend/images/hero-bg-3.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
            <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('frontend')}}">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>ĐƠN HÀNG CỦA TÔI <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">ĐƠN HÀNG CỦA TÔI</h2>
          </div>
        </div>
      </div>
    </section>
 
    <section class="ftco-section">
        <div class="container">
            <div class="row">

                <div class="table-wrap">
                        <table class="table">
                          <thead class="thead-primary">
                            <tr class="text-center">
                              <th >Thông tin giao hàng</th>
                              <th>Tình trạng</th>
                               <th>&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($donhang as $value)
                            <tr class="alert" role="alert">
                                <td>
                                    <a class="d-block">Điện thoại: <strong>{{ $value->dienthoaigiaohang }}</strong></a>
                                    <a class="d-block">Địa chỉ giao: <strong>{{ $value->diachigiaohang }}</strong></a>
                                    <a class="d-block">Ngày đặt: <strong>{{ $value->created_at->format('d/m/Y H:i:s') }}</strong></a>
                                    <a class="d-block">Sản phẩm:</a>

                                    <table class="table ">
                                        <thead style="border-color: red;">
                                            <tr class="text-center">
                                              <th>&nbsp;</th>
                                              <th class="text-danger">Sản phẩm</th>
                                              <th class="text-danger">Số Lượng</th>
                                              <th class="text-danger">Đơn giá</th>
                                              <th class="text-danger">VAT</th>
                                              <th class="text-danger">Thành tiền</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $tongtien = 0; @endphp
                                            @foreach($value->DonHang_ChiTiet as $chitiet)
                                                <tr class="alert" role="alert">
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
                                <td>{{ $value->tinhtrang->tinhtrang }}</td>
                                
                                
                                <td class="product-remove"><a href="{{route('khachhang.donhang.huy',['id'=>$value->id])}}"><i class="fa fa-close"></i></a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
            </div>

           
            
        </div>
    </section>

@endsection