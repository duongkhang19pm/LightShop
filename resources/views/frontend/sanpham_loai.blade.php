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
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Trang Chủ <i class="fa fa-chevron-right"></i></a></span>SẢN PHẨM <span> <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">Loại Sản Phẩm {{$loaisanpham->tenloai}}</h2>
              </div>
            </div>
          </div>
    </section>
        
    <section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
             
							@foreach($sanpham as $value)
               
							<div class="col-md-4 d-flex">
								<div class="product ftco-animate">
									<div class="img d-flex align-items-center justify-content-center" style="background-image: url('{{env('APP_URL').'/storage/app/'.$value->hinhanh}}');">
										<div class="desc">
											<p class="meta-prod d-flex">
												<a href="{{ route('frontend.giohang.them', ['tensanpham_slug' => $value->tensanpham_slug]) }}" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
												<a href="{{ route('frontend.sanpham_chitiet', ['tensanpham_slug' => $value->tensanpham_slug]) }}" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
											</p>
										</div>
									</div>

									<div class="text text-center">
										<h2>{{$value->tensanpham}}</h2>
										<p class="mb-0"><span class="price text-danger"> {{ number_format($value->dongia) }}<sup>đ</sup> </span></p>
									</div>
								</div>
							</div>
             
							@endforeach
              
					 </div>
					 <p class=" text-center">
            		{{$sanpham->links()}}
          </p>
					</div>

					<div class="col-md-3">
						

            <div class="sidebar-box ftco-animate">
              <h3>Tin Tức Mới Nhất</h3>
              @foreach($baiviet as $value)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('{{asset('public/frontend/images/image_3.jpg')}}');"></a>
                <div class="text">
                  <h3 class="heading"><a href="{{ route('frontend.baiviet_chitiet', ['tenchude_slug' => $value->chude->tenchude_slug,'tieude_slug' => $value->tieude_slug]) }}">{{$value->tieude}}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="fa fa-calendar"></span>{{$value->ngaydang}}</a></div>
                    <div><a href="#"><span class="fa fa-user"></span> {{$value->taikhoan->name}}</a></div>
                    <div><a href="#"><span class="fa fa-eye"></span> {{$value->luotxem}}</a></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
					</div>
				</div>
			</div>
		</section>

    
 @endsection