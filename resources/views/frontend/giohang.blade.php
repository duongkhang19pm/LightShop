@extends('layouts.frontend')

@section('pagetitle')
    Frontend
@endsection

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('public/frontend/images/hero-bg-3.jpg')}}');" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-end justify-content-center">
	          <div class="col-md-9 ftco-animate mb-5 text-center">
	          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Trang Chủ <i class="fa fa-chevron-right"></i></a></span> <span>Giỏ Hàng <i class="fa fa-chevron-right"></i></span></p>
	            <h2 class="mb-0 bread">Giỏ Hàng Của Tôi</h2>
	          </div>
	        </div>
	      </div>
	</section>
	 @if (session('status'))
        <div class="alert alert-danger" role="alert">
            {!! session('status') !!}
        </div>
    @endif
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">

    			<div class="table-wrap">
    				<div class="row justify-content-left">
    			<p class="text-center"><a href="{{route('frontend')}}" class="btn btn-info py-3 px-4">Tiếp Tục Mua Hàng</a></p>
    		</div>
						<table class="table">
						  <thead class="thead-primary">
						    <tr class="text-center">
						      <th>&nbsp;</th>
						      <th class="text-left">Sản Phẩm</th>
						      <th>Đơn Giá</th>
						      <th>Số Lượng</th>
						      <th>Thành Tiền</th>
						       <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
						  	@foreach(Cart::content() as $value)
						    <tr class="alert" role="alert">

						    	<td>
						    		<div class="img" style="background-image: url('{{env('APP_URL').'/storage/app/'.$value->options->image}}');"></div>
						    	</td>
						        <td>{{ $value->name }} </td>
						        <td>{{ number_format($value->price) }}<sup>đ</sup></td>
						        <td class="product-quantity" data-title="Quantity">
									 <div class="quantity">
										 <a class="fa fa-minus-circle" href="{{ route('frontend.giohang.giam', ['row_id' => $value->rowId]) }}"></a>
										 	<input type="text" name="qty" value="{{ $value->qty }}" class="qty" size="4" />
										 <a class="fa fa-plus-circle" href="{{ route('frontend.giohang.tang', ['row_id' => $value->rowId]) }}"></a>
									 </div>
						        </td>
				                <td class="product-subtotal" data-title="Total">{{ number_format($value->price * $value->qty) }}<sup>đ</sup></td>
						        <td class="product-remove"><a href="{{ route('frontend.giohang.xoa', ['row_id' => $value->rowId]) }}"><i class="fa fa-close"></i></a></td>
						    </tr>
						    @endforeach
						  </tbody>
						</table>
					</div>
    		</div>

    		<div class="row justify-content-end">

    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Tổng Tiền Giỏ Hàng</h3>
    					<p class="d-flex">
    						<span>Tổng Tiền Sản Phẩm</span>
    						<span>{{ Cart::subtotal() }}<sup>đ</sup></span>
    					</p>
    					<p class="d-flex">
    						<span>Thuế VAT (10%)</span>
    						<span>{{ Cart::tax() }}<sup>đ</sup></span>
    					</p>
    					<p class="d-flex">
    						<span>Phí Vận Chuyển</span>
    						<span>Miễn phí vận chuyển</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Tổng thanh toán</span>
    						<span>{{ Cart::total() }}<sup>đ</sup></span>
    					</p>
    				</div>
    				<p class="text-center"><a href="{{route('frontend.dathang')}}" class="btn btn-primary py-3 px-4">Tiến Hành Thanh Toán</a></p>
    			</div>
    		</div>
    		
    	</div>
    </section>
@endsection