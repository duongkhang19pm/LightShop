@extends('layouts.admin')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Nhóm Sản Phẩm</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.nhomsanpham')}}">Danh sách nhóm sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cập nhật nhóm sản phẩm</li>
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
                            <form action="{{ route('admin.nhomsanpham.sua',['id'=> $nhomsanpham->id]) }}" method="post">
                            @csrf
                                  <div class="mb-3">
                                        <div class="form-group">
                                            <label class="form-label" for="tennhom">Tên nhóm sản phẩm</label>
                                             <input type="text" class="form-control @error('tennhom') is-invalid @enderror" id="tennhom" name="tennhom" value="{{$nhomsanpham->tennhom}}"required />
                                             @error('tennhom')
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