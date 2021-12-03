<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatLieu extends Model
{
    use HasFactory;
    protected $table = 'chatlieu';
     // protected $primaryKey = 'id';
     // public $incrementing = false;
     // protected $keyType = 'string';

     public function SanPham()
     {
        return $this->hasMany(SanPham::class, 'chatlieu_id', 'id');
     }
}
