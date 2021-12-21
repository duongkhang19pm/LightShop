@extends('layouts.nhanvien')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Sản Phẩm</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('nhanvien.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('nhanvien.sanpham')}}">Danh sách sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
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
                        <h4 class="card-title">THÊM</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('nhanvien.sanpham.them') }}" method="post" enctype="multipart/form-data">
                             @csrf
                                <div class="form-group">
                                    <label for="nhomsanpham_id">Nhóm Sản Phẩm:</label>
                                    <select class="form-select @error('nhomsanpham_id') is-invalid @enderror" id="nhomsanpham_id" name="nhomsanpham_id" required>
                                         <option value="" selected disabled>-- Chọn Nhóm Sản Phẩm --</option>
                                         @foreach ($nhomsanpham as $value)
                                            <option value="{{ $value->id }}">{{ $value->tennhom }}</option>
                                        @endforeach
                                     </select>
                                      @error('nhomsanpham_id')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                    
                                </div>
                                <div class="form-group">
                                    <label for="loaisanpham_id">Loại Sản Phẩm:</label>
                                    <select class="form-select @error('loaisanpham_id') is-invalid @enderror" id="loaisanpham_id" name="loaisanpham_id" required></select>
                                    @error('loaisanpham_id')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                </div>
                                <div class="mb-3">
                                     <label class="form-label" for="thuonghieu_id">Thương hiệu</label>
                                     <select class="form-select @error('thuonghieu_id') is-invalid @enderror" id="thuonghieu_id" name="thuonghieu_id" required>
                                         <option value="">-- Chọn Thương hiệu --</option>
                                         @foreach($thuonghieu as $value)
                                            <option value="{{ $value->id }}">{{ $value->tenthuonghieu }}</option>
                                         @endforeach
                                     </select>
                                    @error('thuonghieu_id')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label" for="xuatxu_id">Xuất xứ</label>
                                     <select class="form-select @error('xuatxu_id') is-invalid @enderror" id="xuatxu_id" name="xuatxu_id" required>
                                         <option value="">-- Chọn Xuất xứ --</option>
                                         @foreach($xuatxu as $value)
                                            <option value="{{ $value->id }}">{{ $value->tenxuatxu }}</option>
                                         @endforeach
                                     </select>
                                    @error('xuatxu_id')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label" for="chatlieu_id">Chất liệu</label>
                                     <select class="form-select @error('chatlieu_id') is-invalid @enderror" id="chatlieu_id" name="chatlieu_id" required>
                                         <option value="">-- Chọn Chất liệu --</option>
                                         @foreach($chatlieu as $value)
                                            <option value="{{ $value->id }}">{{ $value->tenchatlieu }}</option>
                                         @endforeach
                                     </select>
                                    @error('chatlieu_id')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                 </div>

                                <div class="mb-3">
                                     <label class="form-label" for="tensanpham">Tên sản phẩm</label>
                                     <input type="text" class="form-control @error('tensanpham') is-invalid @enderror" id="tensanpham" name="tensanpham" value="{{ old('tensanpham') }}"required />
                                     @error('tensanpham')
                                         <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror

                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label" for="soluong">Số lượng</label>
                                     <input type="number" min="0" class="form-control @error('soluong') is-invalid @enderror" id="soluong" name="soluong" value="{{ old('soluong') }}" required />
                                     @error('soluong')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                 </div>
                                 
                                 <div class="mb-3">
                                     <label class="form-label" for="dongia">Đơn giá</label>
                                     <input type="number" min="0" class="form-control @error('dongia') is-invalid @enderror" id="dongia" name="dongia" value="{{ old('dongia') }}" required />
                                     @error('dongia')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                 </div>
                                 
                                
                                  <div class="form-group">
                                    <label class="form-label" for="hinhanh">Hình ảnh sản phẩm</label>
                                      <input type="file" name="hinhanh[]" multiple class="form-control @error('hinhanh') is-invalid @enderror" accept="hinhanh/*">
                                      @error('hinhanh')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                  </div>
                                 <div class="mb-3">
                                     <label class="form-label" for="motasanpham">Mô tả sản phẩm</label>
                                     <textarea class="form-control" id="motasanpham" name="motasanpham">{{ old('motasanpham') }}</textarea>
                                 </div>
                                <button type="submit" class="btn btn-primary me-1 mb-1"> <i class="fas fa-save"></i> Thêm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>  
<script>
        $(document).ready(function(){
            // when country dropdown changes
            $('#nhomsanpham_id').change(function() {

                var NhomID = $(this).val();

                if (NhomID) {

                    $.ajax({
                        type: "GET",
                        url: "{{ route('nhanvien.sanpham.getLoai') }}?nhomsanpham_id=" + NhomID,
                        success: function(res) {

                            if (res) {

                                $("#loaisanpham_id").empty();
                                $("#loaisanpham_id").append('<option>--Chọn Loại Sản Phẩm--</option>');
                                $.each(res, function(key, value) {
                                    $("#loaisanpham_id").append('<option value="' + key + '">' + value +
                                        '</option>');
                                });

                            } else {

                                $("#loaisanpham_id").empty();
                            }
                        }
                    });
                } else {

                    $("#loaisanpham_id").empty();
                
                }
            });

           
        });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#motasanpham'), {
                toolbar: {
                    items: [
                        'undo',
                        'redo',
                        '|',
                        'fontColor',
                        'highlight',
                        '|',
                        'bold',
                        'underline',
                        'italic',
                        'subscript',
                        'superscript',
                        'removeFormat',
                        '|',
                        'alignment',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'link',
                        'codeBlock',
                        'imageInsert',
                        'insertTable',
                        'mediaEmbed',
                        'CKFinder'
                    ]
                },
                language: 'vi',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:full',
                        'imageStyle:side',
                        'linkImage'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells',
                        'tableCellProperties',
                        'tableProperties'
                    ]
                },
                licenseKey: '',
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection