@extends('layouts.admin')
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
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.sanpham')}}">Danh sách sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cập nhật sản phẩm</li>
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
                             <form action="{{ route('admin.sanpham.sua',['id'=> $sanpham->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="nhomsanpham_id">Nhóm Sản Phẩm:</label>
                                    <select class="form-select @error('nhomsanpham_id') is-invalid @enderror" id="nhomsanpham_id" name="nhomsanpham_id" required>
                                         <option value="" selected disabled>-- Chọn Nhóm Sản Phẩm --</option>
                                         @foreach ($nhomsanpham as $value)
                                            <option value="{{ $value->id }}" {{ ($sanpham->nhomsanpham_id == $value->id) ? 'selected' : '' }}>{{ $value->tennhom }}</option>
                                        @endforeach
                                     </select>
                                      @error('nhomsanpham_id')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                    
                                </div>
                                <div class="form-group">
                                    <label for="loaisanpham_id">Loại Sản Phẩm:</label>
                                    <select class="form-select @error('loaisanpham_id') is-invalid @enderror" id="loaisanpham_id" name="loaisanpham_id" required>
                                        
                                        @foreach($loaisanpham as $value)
                                        <option value="{{ $value->id }}" {{ ($sanpham->loaisanpham_id == $value->id) ? 'selected' : '' }}>{{ $value->tenloai }}</option>
                                     @endforeach
                                    </select>
                                     
                                    @error('loaisanpham_id')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                </div>
                                
                                <div class="mb-3">
                                     <label class="form-label" for="thuonghieu_id">Nhóm sản phẩm</label>
                                     <select class="form-select @error('thuonghieu_id') is-invalid @enderror" id="thuonghieu_id" name="thuonghieu_id" required>
                                        <option value="">-- Chọn nhóm --</option>
                                         @foreach($thuonghieu as $value)
                                            <option value="{{ $value->id }}" {{ ($sanpham->thuonghieu_id == $value->id) ? 'selected' : '' }}>{{ $value->tenthuonghieu }}</option>
                                         @endforeach
                                     </select>
                                    @error('thuonghieu_id')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                 </div>
                                <div class="mb-3">
                                    <label class="form-label" for="xuatxu_id">Xuất xứ</label>
                                    <select class="form-select @error('xuatxu_id') is-invalid @enderror" id="xuatxu_id" name="xuatxu_id" required>
                                        <option value="">-- Chọn xuất xứ --</option>
                                        @foreach($xuatxu as $value)
                                            <option value="{{ $value->id }}" {{ ($sanpham->xuatxu_id == $value->id) ? 'selected' : '' }}>{{ $value->tenxuatxu }}</option>
                                        @endforeach
                                    </select>
                                    @error('xuatxu_id')
                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="chatlieu_id">Chất Liệu</label>
                                    <select class="form-select @error('chatlieu_id') is-invalid @enderror" id="chatlieu_id" name="chatlieu_id" required>
                                        <option value="">-- Chọn chất liệu --</option>
                                        @foreach($chatlieu as $value)
                                            <option value="{{ $value->id }}" {{ ($sanpham->chatlieu_id == $value->id) ? 'selected' : '' }}>{{ $value->tenchatlieu }}</option>
                                        @endforeach
                                    </select>
                                    @error('chatlieu_id')
                                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                    @enderror
                                </div>
                                 <div class="mb-3">
                                     <label class="form-label" for="tensanpham">Tên sản phẩm</label>
                                     <input type="text" class="form-control @error('tensanpham') is-invalid @enderror" id="tensanpham" name="tensanpham" value="{{ $sanpham->tensanpham }}"required />
                                     @error('tensanpham')
                                         <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror

                                 </div>
                                 <div class="mb-3">
                                     <label class="form-label" for="soluong">Số lượng</label>
                                     <input type="number" min="0" class="form-control @error('soluong') is-invalid @enderror" id="soluong" name="soluong" value="{{ $sanpham->soluong }}" required />
                                     @error('soluong')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                 </div>
                                 
                                 <div class="mb-3">
                                     <label class="form-label" for="dongia">Đơn giá</label>
                                     <input type="number" min="0" class="form-control @error('dongia') is-invalid @enderror" id="dongia" name="dongia" value="{{ $sanpham->dongia }}" required />
                                     @error('dongia')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                 </div>
                                 
                                  <div class="mb-3">
                                     @foreach($sanpham->HinhAnh as $value)
                                            @if(!empty($value->thumuc))
                                                 <img src="{{env('APP_URL').'/storage/app/'.$value->thumuc.'/'.$value->hinhanh}}" height="70" width="100" >
                                            @endif
                                             
                                        @endforeach
                                         
                                        <span class="d-block small text-danger">Bỏ trống nếu muốn giữ nguyên ảnh cũ.</span>
                                    
                                      <input type="file" name="anhbia[]" multiple class="form-control @error('anhbia') is-invalid @enderror" accept="anhbia/*">
                                     
                                     @error('anhbia')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                 </div>
                                 
                                <div class="mb-3">
                                     <label class="form-label" for="motasanpham">Mô tả sản phẩm</label>
                                     <textarea class="form-control" id="motasanpham" name="motasanpham">{{ $sanpham->motasanpham }}</textarea>
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
   <script>
        $(document).ready(function(){
            // when country dropdown changes
            $('#nhomsanpham_id').change(function() {

                var NhomID = $(this).val();

                if (NhomID) {

                    $.ajax({
                        type: "GET",
                        url: "{{ route('admin.sanpham.getLoai') }}?nhomsanpham_id=" + NhomID,
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