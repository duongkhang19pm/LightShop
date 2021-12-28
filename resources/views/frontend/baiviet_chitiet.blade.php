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
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Trang Chủ <i class="fa fa-chevron-right"></i></a></span>Chi Tiết Bài Viết <span> <i class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">CHI TIẾT BÀI VIẾT</h2>
              </div>
            </div>
          </div>
    </section>
  <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <div>
              <a href="#"><span class="fa fa-calendar"></span>{{$baiviet2->ngaydang}}</a>
              <a href="#"><span class="fa fa-user"></span> {{$baiviet2->taikhoan->name}}</a>
              <a href="#"><span class="fa fa-eye"></span> {{$baiviet2->luotxem}}</a>
            </div>
            
            <h2 class="mb-3">{{$baiviet2->tieude}}</h2>
            <p>{{$baiviet2->tomtat}}</p>
            <p ><?php echo  $baiviet2->noidung ;?></p>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Chủ đề</h3>
                 @foreach($chude as $value)
                <li><a href="{{route('frontend.baiviet_chude',['tenchude_slug' => $value->tenchude_slug])}}">{{$value->tenchude}}<span class="fa fa-chevron-right"></span></a></li>
                @endforeach
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tin Tức Mới Nhất</h3>
              @foreach($baiviet1 as $value)
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
    </section> <!-- .section -->
@endsection
   