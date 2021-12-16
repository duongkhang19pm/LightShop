@extends('layouts.nhanvien')
@section('content')

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Bài viết</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('nhanvien.home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('nhanvien.baiviet')}}">Danh sách bài viết</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thêm bài viết</li>
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
                            <form action="{{ route('nhanvien.baiviet.them') }}" method="post" enctype="multipart/form-data"> 
                             @csrf
                                 <div class="mb-3">
                                     <label class="form-label" for="chude_id">Chủ đề</label>
                                     <select class="form-select @error('chude_id') is-invalid @enderror" id="chude_id" name="chude_id" required>
                                         <option value="">-- Chọn chủ đề --</option>
                                         @foreach($chude as $value)
                                            <option value="{{ $value->id }}">{{ $value->tenchude }}</option>
                                         @endforeach
                                     </select>
                                    @error('chude_id')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                     @enderror
                                 </div>   
                                <div class="mb-3">
                                    <label for="tieude">Tiêu đề <span class="text-danger font-weight-bold">*</span></label>
                                    <input type="text" class="form-control @error('tieude') is-invalid @enderror" id="tieude" name="tieude" required />
                                    @error('tieude')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                    @enderror
                                </div>          
                                <div class="mb-3">
                                    <label for="tomtat">Tóm tắt bài viết</label>
                                    <textarea class="form-control" id="tomtat" name="tomtat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="noidung">Nội dung bài viết <span class="text-danger font-weight-bold">*</span></label>
                                    <textarea class="form-control @error('noidung') is-invalid @enderror " id="noidung" name="noidung" ></textarea>
                                    @error('noidung')
                                        <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                                    @enderror
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
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#noidung'), {
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