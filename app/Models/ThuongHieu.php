<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuongHieu extends Model
{
    use HasFactory;
    protected $table = 'thuonghieu';
     // protected $primaryKey = 'id';
     // public $incrementing = false;
     // protected $keyType = 'string';
    protected $fillable = [
        'tenthuonghieu', 'tenthuonghieu_slug',
      ];
     public function SanPham()
     {
        return $this->hasMany(SanPham::class, 'thuonghieu_id', 'id');
     }
}
