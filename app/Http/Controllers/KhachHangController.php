<?php
namespace App\Http\Controllers;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class KhachHangController extends Controller
{
     public function __construct()
     {
        $this->middleware('auth');
     }

     public function getHome()
     {
        return view('khachhang.index');
     }

     
}