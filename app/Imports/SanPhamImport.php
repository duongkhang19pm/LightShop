<?php

namespace App\Imports;

use App\Models\SanPham;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class SanPhamImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
     {
         return new SanPham([
            'nhomsanpham_id' => $row['nhomsanpham_id'],
            'loaisanpham_id' => $row['loaisanpham_id'],
            'thuonghieu_id' => $row['thuonghieu_id'],
            'xuatxu_id' => $row['xuatxu_id'],
            'chatlieu_id' => $row['chatlieu_id'],
            'tensanpham' => $row['tensanpham'],
            'tensanpham_slug' => $row['tensanpham_slug'],
            'soluong' => $row['soluong'],
            'dongia' => $row['dongia'],
            //'hinhanh'=> $row['hinhanh'],
            
         ]);
     }


}
