<?php

namespace App\Imports;

use App\Models\ThuongHieu;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ThuongHieuImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new ThuongHieu([
            'tenthuonghieu' => $row['tenthuonghieu'],
            'tenthuonghieu_slug' => $row['tenthuonghieu_slug'],
            'hinhanh' => $row['hinhanh'],
        ]);
    }
}
