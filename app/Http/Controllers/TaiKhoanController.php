<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class TaiKhoanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Tài Khoản Admin
    public function getDanhSach()
    {
        $taikhoan = TaiKhoan::all();
        return view('admin.taikhoan.danhsach', compact('taikhoan'));
    }

  

    public function getThem()
    {
        return view('admin.taikhoan.them');
    }

    public function postThem(Request $request)
    {
        $request->validate([
        'name' => ['required', 'string', 'max:100'],
        'username' => ['required', 'max:255', 'unique:taikhoan'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:taikhoan'],
        'password' => ['required', 'min:4', 'confirmed'],
        ]);

        $orm = new TaiKhoan();
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        $orm->password = Hash::make($request->password);
        $orm->role = $request->role;
        $orm->kichhoat = 0;
        $orm->save();

        return redirect()->route('admin.taikhoan');
    }



    public function getSua($id)
    {
        $taikhoan = TaiKhoan::find($id);
        return view('admin.taikhoan.sua', compact('taikhoan'));
    }

    public function postSua(Request $request , $id)
    {
        $request->validate([
        'name' => ['required', 'string', 'max:100'],
        'username' => ['required', 'max:255', 'unique:taikhoan,username,'.$id],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:taikhoan,email,'.$id],
        'password' => [ 'confirmed'],
        ]);

        $orm = TaiKhoan::find($id);
        $orm->name = $request->name;
        $orm->username = Str::before($request->email, '@');
        $orm->email = $request->email;
        if(!empty($request->password)) $orm->password = Hash::make($request->password);
        $orm->role = $request->role;
        $orm->save();

        return redirect()->route('admin.taikhoan');
    }

    public function getXoa($id)
    {
        $orm = TaiKhoan::find($id);
        $orm->delete();

        return redirect()->route('admin.taikhoan');
    }

     public function getKichHoat($id)
    {
        $orm = TaiKhoan::find($id);
        $orm->kichhoat=1-$orm->kichhoat;
        $orm->save();

        return redirect()->route('admin.taikhoan');
    }


   

}
