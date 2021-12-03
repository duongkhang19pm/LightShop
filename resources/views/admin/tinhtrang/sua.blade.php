@extends('layouts.admin')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tình trạng đơn hàng</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.tinhtrang')}}">Danh sách tình trạng đơn hàng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cập nhật tình trạng đơn hàng</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">CẬP NHẬT</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('admin.tinhtrang.sua',['id'=> $tinhtrang->id]) }}" method="post">
                            @csrf
                                  <div class="mb-3">
                                        <div class="form-group">
                                            <label class="form-label" for="tinhtrang">Tình trạng đơn hàng</label>
                                             <input type="text" class="form-control @error('tinhtrang') is-invalid @enderror" id="tinhtrang" name="tinhtrang" value="{{$tinhtrang->tinhtrang}}"required />
                                             @error('tinhtrang')
                                                 <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                             @enderror

                                        </div>
                                    </div>
                                   
                                    
                                        <button type="submit" class="btn btn-primary me-1 mb-1"> <i class="fas fa-save"></i> Cập Nhật</button>
                                       
                                 
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> 
   
@endsection