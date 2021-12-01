<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChuDe extends Model
{
    use HasFactory;
    protected $table = 'chude';
     // protected $primaryKey = 'id';
     // public $incrementing = false;
     // protected $keyType = 'string';
     
       public function NhomSanPham()
     {
        return $this->hasMany(NhomSanPham::class, 'sanpham_id', 'id');
     }

     public function SanPham()
     {
        return $this->hasMany(SanPham::class, 'loaisanpham_id', 'id');
     }
}
