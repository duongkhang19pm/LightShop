<?php

namespace App\Exports;

use App\Models\SanPham;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class SanPhamExport implements FromCollection, WithHeadings, WithMapping
{
    public function headings(): array
    {
        return [
            'nhomsanpham_id',
            'loaisanpham_id',
            'thuonghieu_id',
            'xuatxu_id',
            'chatlieu_id',
            'tensanpham',
            'tensanpham_slug',
            'soluong',
            'dongia',
            
        ];
    }

    public function map($row): array
    {
    return [
        $row->nhomsanpham_id,
        $row->loaisanpham_id,
        $row->thuonghieu_id,
        $row->xuatxu_id,
        $row->chatlieu_id,
        $row->tensanpham,
        $row->tensanpham_slug,
        $row->soluong,
        $row->dongia,
       
    ];
    }   

    public function collection()
    {
        return SanPham::all();
    }
}
