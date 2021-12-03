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
     
     public function BaiViet()
     {
        return $this->hasMany(BaiViet::class, 'chude_id', 'id');
     }
}
