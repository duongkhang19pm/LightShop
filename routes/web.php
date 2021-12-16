<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhomSanPhamController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\ThuongHieuController;
use App\Http\Controllers\XuatXuController;
use App\Http\Controllers\ChatLieuController;
use App\Http\Controllers\ChuDeController;
use App\Http\Controllers\BaiVietController;
use App\Http\Controllers\TinhTrangController;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\DonHangChiTietController;
use App\Http\Controllers\LienHeController;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\DropdownController;

//Đăng Ký, đăng nhập, quên mật khẩu,...
Auth::routes();
// Trang chủ
Route::get('/', [HomeController::class, 'getHome'])->name('frontend');
Route::get('/403', [HomeController::class, 'get403'])->name('403');



// Trang quản trị
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function() {
    // Trang chủ quản trị
    Route::get('/home', [AdminController::class, 'getHome'])->name('home');
    Route::get('/', [AdminController::class, 'getHome'])->name('home');

    // Quản lý Nhóm sản phẩm
    Route::get('/nhomsanpham', [NhomSanPhamController::class, 'getDanhSach'])->name('nhomsanpham');
    Route::get('/nhomsanpham/them', [NhomSanPhamController::class, 'getThem'])->name('nhomsanpham.them');
    Route::post('/nhomsanpham/them', [NhomSanPhamController::class, 'postThem'])->name('nhomsanpham.them');
    Route::get('/nhomsanpham/sua/{id}', [NhomSanPhamController::class, 'getSua'])->name('nhomsanpham.sua');
    Route::post('/nhomsanpham/sua/{id}', [NhomSanPhamController::class, 'postSua'])->name('nhomsanpham.sua');
    Route::get('/nhomsanpham/xoa/{id}', [NhomSanPhamController::class, 'getXoa'])->name('nhomsanpham.xoa');

     // Quản lý Loại sản phẩm
    Route::get('/loaisanpham', [LoaiSanPhamController::class, 'getDanhSach'])->name('loaisanpham');
    Route::get('/loaisanpham/them', [LoaiSanPhamController::class, 'getThem'])->name('loaisanpham.them');
    Route::post('/loaisanpham/them', [LoaiSanPhamController::class, 'postThem'])->name('loaisanpham.them');
    Route::get('/loaisanpham/sua/{id}', [LoaiSanPhamController::class, 'getSua'])->name('loaisanpham.sua');
    Route::post('/loaisanpham/sua/{id}', [LoaiSanPhamController::class, 'postSua'])->name('loaisanpham.sua');
    Route::get('/loaisanpham/xoa/{id}', [LoaiSanPhamController::class, 'getXoa'])->name('loaisanpham.xoa');

    // Quản lý Thương hieu
     Route::get('/thuonghieu', [ThuongHieuController::class, 'getDanhSach'])->name('thuonghieu');
     Route::get('/thuonghieu/them', [ThuongHieuController::class, 'getThem'])->name('thuonghieu.them');
     Route::post('/thuonghieu/them', [ThuongHieuController::class, 'postThem'])->name('thuonghieu.them');
     Route::get('/thuonghieu/sua/{id}', [ThuongHieuController::class, 'getSua'])->name('thuonghieu.sua');
     Route::post('/thuonghieu/sua/{id}', [ThuongHieuController::class, 'postSua'])->name('thuonghieu.sua');
     Route::get('/thuonghieu/xoa/{id}', [ThuongHieuController::class, 'getXoa'])->name('thuonghieu.xoa');
     Route::post('/thuonghieu/nhap', [ThuongHieuController::class, 'postNhap'])->name('thuonghieu.nhap');
    Route::get('/thuonghieu/xuat', [ThuongHieuController::class, 'getXuat'])->name('thuonghieu.xuat');

    // Quản lý Xuất xứ
     Route::get('/xuatxu', [XuatXuController::class, 'getDanhSach'])->name('xuatxu');
     Route::get('/xuatxu/them', [XuatXuController::class, 'getThem'])->name('xuatxu.them');
     Route::post('/xuatxu/them', [XuatXuController::class, 'postThem'])->name('xuatxu.them');
     Route::get('/xuatxu/sua/{id}', [XuatXuController::class, 'getSua'])->name('xuatxu.sua');
     Route::post('/xuatxu/sua/{id}', [XuatXuController::class, 'postSua'])->name('xuatxu.sua');
     Route::get('/xuatxu/xoa/{id}', [XuatXuController::class, 'getXoa'])->name('xuatxu.xoa');

    // Quản lý Chất liẹu
     Route::get('/chatlieu', [ChatLieuController::class, 'getDanhSach'])->name('chatlieu');
     Route::get('/chatlieu/them', [ChatLieuController::class, 'getThem'])->name('chatlieu.them');
     Route::post('/chatlieu/them', [ChatLieuController::class, 'postThem'])->name('chatlieu.them');
     Route::get('/chatlieu/sua/{id}', [ChatLieuController::class, 'getSua'])->name('chatlieu.sua');
     Route::post('/chatlieu/sua/{id}', [ChatLieuController::class, 'postSua'])->name('chatlieu.sua');
     Route::get('/chatlieu/xoa/{id}', [ChatLieuController::class, 'getXoa'])->name('chatlieu.xoa');

    // Quản lý Chủ Đề
    Route::get('/chude', [ChuDeController::class, 'getDanhSach'])->name('chude');
    Route::get('/chude/them', [ChuDeController::class, 'getThem'])->name('chude.them');
    Route::post('/chude/them', [ChuDeController::class, 'postThem'])->name('chude.them');
    Route::get('/chude/sua/{id}', [ChuDeController::class, 'getSua'])->name('chude.sua');
    Route::post('/chude/sua/{id}', [ChuDeController::class, 'postSua'])->name('chude.sua');
    Route::get('/chude/xoa/{id}', [ChuDeController::class, 'getXoa'])->name('chude.xoa');

    // Quản lý Bài Viết
    Route::get('/baiviet', [BaiVietController::class, 'getDanhSach'])->name('baiviet');
    Route::get('/baiviet/them', [BaiVietController::class, 'getThem'])->name('baiviet.them');
    Route::post('/baiviet/them', [BaiVietController::class, 'postThem'])->name('baiviet.them');
    Route::get('/baiviet/sua/{id}', [BaiVietController::class, 'getSua'])->name('baiviet.sua');
    Route::post('/baiviet/sua/{id}', [BaiVietController::class, 'postSua'])->name('baiviet.sua');
    Route::get('/baiviet/xoa/{id}', [BaiVietController::class, 'getXoa'])->name('baiviet.xoa');
    Route::get('/baiviet/kiemduyet/{id}', [BaiVietController::class, 'getKiemDuyet'])->name('baiviet.kiemduyet');


     // Quản lý Tình trạng đơn hàng
    Route::get('/tinhtrang', [TinhTrangController::class, 'getDanhSach'])->name('tinhtrang');
    Route::get('/tinhtrang/them', [TinhTrangController::class, 'getThem'])->name('tinhtrang.them');
    Route::post('/tinhtrang/them', [TinhTrangController::class, 'postThem'])->name('tinhtrang.them');
    Route::get('/tinhtrang/sua/{id}', [TinhTrangController::class, 'getSua'])->name('tinhtrang.sua');
    Route::post('/tinhtrang/sua/{id}', [TinhTrangController::class, 'postSua'])->name('tinhtrang.sua');
    Route::get('/tinhtrang/xoa/{id}', [TinhTrangController::class, 'getXoa'])->name('tinhtrang.xoa');

    // Quản lý Sản phẩm
    Route::get('/sanpham', [SanPhamController::class, 'getDanhSach'])->name('sanpham');
    Route::get('/sanpham/them', [SanPhamController::class, 'getThem'])->name('sanpham.them');
    Route::get('/sanpham/getLoai',[SanPhamController::class, 'getLoai'])->name('sanpham.getLoai');
    Route::post('/sanpham/them', [SanPhamController::class, 'postThem'])->name('sanpham.them');
    Route::get('/sanpham/sua/{id}', [SanPhamController::class, 'getSua'])->name('sanpham.sua');
    Route::post('/sanpham/sua/{id}', [SanPhamController::class, 'postSua'])->name('sanpham.sua');
    Route::get('/sanpham/xoa/{id}', [SanPhamController::class, 'getXoa'])->name('sanpham.xoa');
    Route::post('/sanpham/nhap', [SanPhamController::class, 'postNhap'])->name('sanpham.nhap');
    Route::get('/sanpham/xuat', [SanPhamController::class, 'getXuat'])->name('sanpham.xuat');
    Route::post('/sanpham/nhap', [SanPhamController::class, 'postNhap'])->name('sanpham.nhap');
    Route::get('/sanpham/xuat', [SanPhamController::class, 'getXuat'])->name('sanpham.xuat');

    // Quản lý Đơn hàng
    Route::get('/donhang', [DonHangController::class, 'getDanhSach'])->name('donhang');
    Route::get('/donhang/them', [DonHangController::class, 'getThem'])->name('donhang.them');
    Route::post('/donhang/them', [DonHangController::class, 'postThem'])->name('donhang.them');
    Route::get('/donhang/sua/{id}', [DonHangController::class, 'getSua'])->name('donhang.sua');
    Route::post('/donhang/sua/{id}', [DonHangController::class, 'postSua'])->name('donhang.sua');
    Route::get('/donhang/xoa/{id}', [DonHangController::class, 'getXoa'])->name('donhang.xoa');

    // Quản lý Đơn hàng chi tiết
    Route::get('/donhang/chitiet', [DonHangChiTietController::class, 'getDanhSach'])->name('donhang.chitiet');
    Route::get('/donhang/chitiet/sua/{id}', [DonHangChiTietController::class, 'getSua'])->name('donhang.chitiet.sua');
    Route::post('/donhang/chitiet/sua/{id}', [DonHangChiTietController::class, 'postSua'])->name('donhang.chitiet.sua');
    Route::get('/donhang/chitiet/xoa/{id}', [DonHangChiTietController::class, 'getXoa'])->name('donhang.chitiet.xoa');

    // Quản lý Liên hệ
     Route::get('/lienhe', [LienHeController::class, 'getDanhSach'])->name('lienhe');
     Route::get('/lienhe/them', [LienHeController::class, 'getThem'])->name('lienhe.them');
     Route::post('/lienhe/them', [LienHeController::class, 'postThem'])->name('lienhe.them');
     Route::get('/lienhe/sua/{id}', [LienHeController::class, 'getSua'])->name('lienhe.sua');
     Route::post('/lienhe/sua/{id}', [LienHeController::class, 'postSua'])->name('lienhe.sua');
     Route::get('/lienhe/xoa/{id}', [LienHeController::class, 'getXoa'])->name('lienhe.xoa');
    
    // Quản lý Tài khoản Quản Lý 
    Route::get('/taikhoan', [TaiKhoanController::class, 'getDanhSach'])->name('taikhoan');
    Route::get('/taikhoan/them', [TaiKhoanController::class, 'getThem'])->name('taikhoan.them');
    Route::post('/taikhoan/them', [TaiKhoanController::class, 'postThem'])->name('taikhoan.them');
    Route::get('/taikhoan/sua/{id}', [TaiKhoanController::class, 'getSua'])->name('taikhoan.sua');
    Route::post('/taikhoan/sua/{id}', [TaiKhoanController::class, 'postSua'])->name('taikhoan.sua');
    Route::get('/taikhoan/xoa/{id}', [TaiKhoanController::class, 'getXoa'])->name('taikhoan.xoa');
     Route::get('/taikhoan/kichhoat/{id}', [TaiKhoanController::class, 'getKichHoat'])->name('taikhoan.kichhoat');

     

});

Route::prefix('nhanvien')->name('nhanvien.')->middleware('nhanvien')->group(function(){

    Route::get('/home', [NhanVienController::class, 'getHome'])->name('home');
    Route::get('/', [NhanVienController::class, 'getHome'])->name('home');

     // Quản lý Sản phẩm
    Route::get('/sanpham', [SanPhamController::class, 'getDanhSach_NhanVien'])->name('sanpham');
    Route::get('/sanpham/them', [SanPhamController::class, 'getThem_NhanVien'])->name('sanpham.them');
    Route::get('/sanpham/getLoai',[SanPhamController::class, 'getLoai_NhanVien'])->name('sanpham.getLoai');
    Route::post('/sanpham/them', [SanPhamController::class, 'postThem_NhanVien'])->name('sanpham.them');
    Route::get('/sanpham/sua/{id}', [SanPhamController::class, 'getSua_NhanVien'])->name('sanpham.sua');
    Route::post('/sanpham/sua/{id}', [SanPhamController::class, 'postSua_NhanVien'])->name('sanpham.sua');
    Route::get('/sanpham/xoa/{id}', [SanPhamController::class, 'getXoa_NhanVien'])->name('sanpham.xoa');
    Route::post('/sanpham/nhap', [SanPhamController::class, 'postNhap_NhanVien'])->name('sanpham.nhap');
    Route::get('/sanpham/xuat', [SanPhamController::class, 'getXuat_NhanVien'])->name('sanpham.xuat');

    // Quản lý Bài Viết
    Route::get('/baiviet', [BaiVietController::class, 'getDanhSach_NhanVien'])->name('baiviet');
    Route::get('/baiviet/them', [BaiVietController::class, 'getThem_NhanVien'])->name('baiviet.them');
    Route::post('/baiviet/them', [BaiVietController::class, 'postThem_NhanVien'])->name('baiviet.them');
    Route::get('/baiviet/sua/{id}', [BaiVietController::class, 'getSua_NhanVien'])->name('baiviet.sua');
    Route::post('/baiviet/sua/{id}', [BaiVietController::class, 'postSua_NhanVien'])->name('baiviet.sua');
    Route::get('/baiviet/xoa/{id}', [BaiVietController::class, 'getXoa_NhanVien'])->name('baiviet.xoa');
    Route::get('/baiviet/kiemduyet/{id}', [TaiKhoanController::class, 'getKiemDuyet_NhanVien'])->name('baiviet.kiemduyet');

      // Quản lý Liên hệ
     Route::get('/lienhe', [LienHeController::class, 'getDanhSach_NhanVien'])->name('lienhe');
     Route::get('/lienhe/them', [LienHeController::class, 'getThem_NhanVien'])->name('lienhe.them');
     Route::post('/lienhe/them', [LienHeController::class, 'postThem_NhanVien'])->name('lienhe.them');
     Route::get('/lienhe/xoa/{id}', [LienHeController::class, 'getXoa_NhanVien'])->name('lienhe.xoa');
});

Route::prefix('khachhang')->name('khachhang.')->group(function(){

    Route::get('/home', [KhachHangController::class, 'getHome'])->name('home');
    Route::get('/', [KhachHangController::class, 'getHome'])->name('home');

     
});