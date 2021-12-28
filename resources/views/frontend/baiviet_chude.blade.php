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
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Trang Chủ <i class="fa fa-chevron-right"></i></a></span>Chủ Đề Bài Viết <span> <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">CHỦ ĐỀ BÀI VIẾT</h2>
              </div>
            </div>
          </div>
    </section>
    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          @foreach($baiviet as $value)
          <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
          	<div class="blog-entry d-md-flex">
          		<a href="blog-single.html" class="block-20 img" style="background-image: url('{{asset('public/frontend/images/image_3.jpg')}}');">
              </a>
              <div class="text p-4 bg-light">
              	<div class="meta">
              		<p><span class="fa fa-calendar"></span> {{$value->ngaydang}}</p>
              	</div>
                <h3 class="heading mb-3"><a href="#">{{$value->tieude}}</a></h3>
                <p>{{$value->tomtat}}</p>
                <a href="{{ route('frontend.baiviet_chitiet', ['tenchude_slug' => $value->chude->tenchude_slug,'tieude_slug' => $value->tieude_slug]) }}" class="btn-custom">Xem Thêm <span class="fa fa-long-arrow-right"></span></a>

              </div>
            </div>
          </div>
          @endforeach
           
        </div>
       
          <div class=" text-center">
            {{$baiviet->links()}}
          </div>
       
      </div>
    </section>	
@endsection
    