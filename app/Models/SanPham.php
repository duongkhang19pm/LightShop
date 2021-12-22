<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = 'sanpham';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    protected $fillable = [
         'nhomsanpham_id',
         'loaisanpham_id',
         'thuonghieu_id',
         'xuatxu_id',
         'chatlieu_id',
         'tensanpham',
         'tensanpham_slug',
         'soluong',
         'dongia',
         'hinhanh',
         'motasanpham',
     ];
    public function NhomSanPham()
    {
    return $this->belongsTo(NhomSanPham::class, 'nhomsanpham_id', 'id');
    }

    public function LoaiSanPham()
    {
    return $this->belongsTo(LoaiSanPham::class, 'loaisanpham_id', 'id');
    }
     public function ThuongHieu()
    {
    return $this->belongsTo(ThuongHieu::class, 'thuonghieu_id', 'id');
    }
  
    public function XuatXu()
    {
    return $this->belongsTo(XuatXu::class, 'xuatxu_id', 'id');
    }
     public function ChatLieu()
    {
    return $this->belongsTo(ChatLieu::class, 'chatlieu_id', 'id');
    }
    public function DonHang_ChiTiet()
    {
    return $this->hasMany(DonHang_ChiTiet::class, 'sanpham_id', 'id');
    }
    
}
