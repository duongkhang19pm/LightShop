<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getHome()
    {
        return view('nhanvien.index');
    }
}
