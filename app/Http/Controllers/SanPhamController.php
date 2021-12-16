<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\NhomSanPham;
use App\Models\LoaiSanPham;
use App\Models\ThuongHieu;
use App\Models\XuatXu;
use App\Models\ChatLieu;
use Str;
use File;
use Storage;
use App\Imports\SanPhamImport;
use App\Exports\SanPhamExport;
use Excel;
class SanPhamController extends Controller
{
    public function getDanhSach()
    {
        $sanpham = SanPham::paginate(20);
        return view('admin.sanpham.danhsach',compact('sanpham'));
    }
    public function getThem()
    {
        $nhomsanpham =NhomSanPham::all();
        $thuonghieu =ThuongHieu::all();
        $xuatxu =XuatXu::all();
        $chatlieu =ChatLieu::all();
        return view('admin.sanpham.them',compact('nhomsanpham','thuonghieu','xuatxu','chatlieu'));
    }
     public function getLoai(Request $request)
    {
        $loai = LoaiSanPham::where("nhomsanpham_id", $request->nhomsanpham_id)->pluck("tenloai", "id");
        return response()->json($loai);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,[
            'nhomsanpham_id' => ['required'],
            'loaisanpham_id'=>['required'],
            'thuonghieu_id'=>['required'],
            'xuatxu_id'=>['required'],
            'chatlieu_id'=>['required'],
            'tensanpham'=>['required','string','max:191','unique:sanpham'],
            'soluong'=>['required','numeric'],
            'dongia'=>['required','numeric'],
            'hinhanh' => ['nullable','image','max:1024']
        ]);
        // up anh
        if($request->hasFile('hinhanh'))
        {
           
         // Tạo thư mục nếu chưa có
         $loaisanpham = LoaiSanPham::find($request->loaisanpham_id);
         File::isDirectory($loaisanpham->tenloai_slug) or Storage::makeDirectory($loaisanpham->tenloai_slug, 0775);


            $extension = $request->file('hinhanh')->extension();
            $fileName = Str::slug($request->tensanpham,'-').'.'.$extension;
            // Upload vào thư mục và trả về đường dẫn
         $path = Storage::putFileAs($loaisanpham->tenloai_slug, $request->file('hinhanh'), $fileName);
        }

        $orm = new SanPham();
        $orm->nhomsanpham_id = $request->nhomsanpham_id;
        $orm->loaisanpham_id = $request->loaisanpham_id;
        $orm->thuonghieu_id = $request->thuonghieu_id;
        $orm->xuatxu_id = $request->xuatxu_id;
        $orm->chatlieu_id = $request->chatlieu_id;
        $orm->tensanpham = $request->tensanpham;
        $orm->tensanpham_slug = Str::slug($request->tensanpham, '-');
        $orm->soluong = $request->soluong;
        $orm->dongia = $request->dongia;

        if($request->hasFile('hinhanh')) $orm->hinhanh = $path;
        $orm->motasanpham = $request->motasanpham;
        $orm->save();
        return redirect()->route('admin.sanpham');

    }
    public function getSua($id)
    {
        $sanpham = SanPham::find($id);
        $nhomsanpham=NhomSanPham::all();
        $loaisanpham=LoaiSanPham::all();
        $thuonghieu =ThuongHieu::all();
        $xuatxu =XuatXu::all();
        $chatlieu =ChatLieu::all();
        return view('admin.sanpham.sua',compact('sanpham','nhomsanpham','thuonghieu','xuatxu','chatlieu','loaisanpham'));
    }
    public function postSua(Request $request , $id)
    {
        $this->validate($request,[
            'nhomsanpham_id' => ['required'],
            'loaisanpham_id'=>['required'],
            'thuonghieu_id'=>['required'],
            'xuatxu_id'=>['required'],
            'chatlieu_id'=>['required'],
            'tensanpham'=>['required','string','max:191','unique:sanpham,tensanpham,'.$id],
            'soluong'=>['required','numeric'],
            'dongia'=>['required','numeric'],
            'hinhanh' => ['nullable','image','max:1024']
        ]);
         if($request->hasFile('hinhanh'))
        {
           $orm = SanPham::find($id);
            Storage::delete($orm->hinhanh);
         // Tạo thư mục nếu chưa có
            $loaisanpham = LoaiSanPham::find($request->loaisanpham_id);
            File::isDirectory($loaisanpham->tenloai_slug) or Storage::makeDirectory($loaisanpham->tenloai_slug, 0775);

            $extension = $request->file('hinhanh')->extension();
            $fileName = Str::slug($request->tensanpham,'-').'.'.$extension;
            // Upload vào thư mục và trả về đường dẫn
         $path = Storage::putFileAs($loaisanpham->tenloai_slug, $request->file('hinhanh'), $fileName);
        }
        $orm = SanPham::find($id);
        $orm->nhomsanpham_id = $request->nhomsanpham_id;
        $orm->loaisanpham_id = $request->loaisanpham_id;
        $orm->thuonghieu_id = $request->thuonghieu_id;
        $orm->xuatxu_id = $request->xuatxu_id;
        $orm->chatlieu_id = $request->chatlieu_id;
        $orm->tensanpham = $request->tensanpham;
        $orm->tensanpham_slug = Str::slug($request->tensanpham, '-');
        $orm->soluong = $request->soluong;
        $orm->dongia = $request->dongia;

        if($request->hasFile('hinhanh')) $orm->hinhanh = $path;
        $orm->motasanpham = $request->motasanpham;
        $orm->save();
        return redirect()->route('admin.sanpham');

    }
    public function getXoa($id)
    {
        $orm=SanPham::find($id);
        $orm->delete();
        Storage::delete($orm->hinhanh);
        return redirect()->route('admin.sanpham');
    }



    public function getDanhSach_NhanVien()
    {
        $sanpham = SanPham::all();
        return view('nhanvien.sanpham.danhsach',compact('sanpham'));
    }
    public function getThem_NhanVien()
    {
        $nhomsanpham =NhomSanPham::all();
        $thuonghieu =ThuongHieu::all();
        $xuatxu =XuatXu::all();
        $chatlieu =ChatLieu::all();
        return view('nhanvien.sanpham.them',compact('nhomsanpham','thuonghieu','xuatxu','chatlieu'));
    }
     public function getLoai_NhanVien(Request $request)
    {
        $loai = LoaiSanPham::where("nhomsanpham_id", $request->nhomsanpham_id)->pluck("tenloai", "id");
        return response()->json($loai);
    }

    public function postThem_NhanVien(Request $request)
    {
        $this->validate($request,[
            'nhomsanpham_id' => ['required'],
            'loaisanpham_id'=>['required'],
            'thuonghieu_id'=>['required'],
            'xuatxu_id'=>['required'],
            'chatlieu_id'=>['required'],
            'tensanpham'=>['required','string','max:191','unique:sanpham'],
            'soluong'=>['required','numeric'],
            'dongia'=>['required','numeric'],
            'hinhanh' => ['nullable','image','max:1024']
        ]);
        // up anh
        if($request->hasFile('hinhanh'))
        {
           
         // Tạo thư mục nếu chưa có
         $loaisanpham = LoaiSanPham::find($request->loaisanpham_id);
         File::isDirectory($loaisanpham->tenloai_slug) or Storage::makeDirectory($loaisanpham->tenloai_slug, 0775);


            $extension = $request->file('hinhanh')->extension();
            $fileName = Str::slug($request->tensanpham,'-').'.'.$extension;
            // Upload vào thư mục và trả về đường dẫn
         $path = Storage::putFileAs($loaisanpham->tenloai_slug, $request->file('hinhanh'), $fileName);
        }

        $orm = new SanPham();
        $orm->nhomsanpham_id = $request->nhomsanpham_id;
        $orm->loaisanpham_id = $request->loaisanpham_id;
        $orm->thuonghieu_id = $request->thuonghieu_id;
        $orm->xuatxu_id = $request->xuatxu_id;
        $orm->chatlieu_id = $request->chatlieu_id;
        $orm->tensanpham = $request->tensanpham;
        $orm->tensanpham_slug = Str::slug($request->tensanpham, '-');
        $orm->soluong = $request->soluong;
        $orm->dongia = $request->dongia;

        if($request->hasFile('hinhanh')) $orm->hinhanh = $path;
        $orm->motasanpham = $request->motasanpham;
        $orm->save();
        return redirect()->route('nhanvien.sanpham');

    }
    public function getSua_NhanVien($id)
    {
        $sanpham = SanPham::find($id);
        $nhomsanpham=NhomSanPham::all();
        $loaisanpham=LoaiSanPham::all();
        $thuonghieu =ThuongHieu::all();
        $xuatxu =XuatXu::all();
        $chatlieu =ChatLieu::all();
        return view('nhanvien.sanpham.sua',compact('sanpham','nhomsanpham','thuonghieu','xuatxu','chatlieu','loaisanpham'));
    }
    public function postSua_NhanVien(Request $request , $id)
    {
        $this->validate($request,[
            'nhomsanpham_id' => ['required'],
            'loaisanpham_id'=>['required'],
            'thuonghieu_id'=>['required'],
            'xuatxu_id'=>['required'],
            'chatlieu_id'=>['required'],
            'tensanpham'=>['required','string','max:191','unique:sanpham,tensanpham,'.$id],
            'soluong'=>['required','numeric'],
            'dongia'=>['required','numeric'],
            'hinhanh' => ['nullable','image','max:1024']
        ]);
         if($request->hasFile('hinhanh'))
        {
           $orm = SanPham::find($id);
            Storage::delete($orm->hinhanh);
         // Tạo thư mục nếu chưa có
            $loaisanpham = LoaiSanPham::find($request->loaisanpham_id);
            File::isDirectory($loaisanpham->tenloai_slug) or Storage::makeDirectory($loaisanpham->tenloai_slug, 0775);

            $extension = $request->file('hinhanh')->extension();
            $fileName = Str::slug($request->tensanpham,'-').'.'.$extension;
            // Upload vào thư mục và trả về đường dẫn
         $path = Storage::putFileAs($loaisanpham->tenloai_slug, $request->file('hinhanh'), $fileName);
        }
        $orm = SanPham::find($id);
        $orm->nhomsanpham_id = $request->nhomsanpham_id;
        $orm->loaisanpham_id = $request->loaisanpham_id;
        $orm->thuonghieu_id = $request->thuonghieu_id;
        $orm->xuatxu_id = $request->xuatxu_id;
        $orm->chatlieu_id = $request->chatlieu_id;
        $orm->tensanpham = $request->tensanpham;
        $orm->tensanpham_slug = Str::slug($request->tensanpham, '-');
        $orm->soluong = $request->soluong;
        $orm->dongia = $request->dongia;

        if($request->hasFile('hinhanh')) $orm->hinhanh = $path;
        $orm->motasanpham = $request->motasanpham;
        $orm->save();
        return redirect()->route('nhanvien.sanpham');

    }
    public function getXoa_NhanVien($id)
    {
        $orm=SanPham::find($id);
        $orm->delete();
        Storage::delete($orm->hinhanh);
        return redirect()->route('nhanvien.sanpham');
    }

    // Nhập từ Excel
     public function postNhap(Request $request)
     {
        Excel::import(new SanPhamImport, $request->file('file_excel'));

        return redirect()->route('admin.sanpham');
     }

     // Xuất ra Excel
    public function getXuat()
    {
        return Excel::download(new SanPhamExport, 'danh-sach-san-pham.xlsx');
    }
}
