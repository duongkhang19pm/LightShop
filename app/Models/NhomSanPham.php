<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhomSanPham extends Model
{
      use HasFactory;
     
     protected $table = 'nhomsanpham';
     // protected $primaryKey = 'id';
     // public $incrementing = false;
     // protected $keyType = 'string';
     public function LoaiSanPham()
     {
     return $this->hasMany(LoaiSanPham::class, 'nhomsanpham_id', 'id');
     }
     public function SanPham()
     {
     return $this->hasMany(SanPham::class, 'nhomsanpham_id', 'id');
     }
}
