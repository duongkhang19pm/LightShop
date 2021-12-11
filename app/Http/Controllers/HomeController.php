<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
class HomeController extends Controller
{
    
    

    public function __construct()
    {
        
    }
    
    public function getHome()
    {
        $sanpham = SanPham::Where('hienthi',1)->paginate(20);
        return view('frontend.index', compact('sanpham'));
    }

     

}