<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XuatXu extends Model
{
    use HasFactory;
    protected $table = 'xuatxu';
     // protected $primaryKey = 'id';
     // public $incrementing = false;
     // protected $keyType = 'string';
     
     public function SanPham()
     {
        return $this->hasMany(SanPham::class, 'xuatxu_id', 'id');
     }

}
