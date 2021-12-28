<?php
namespace App\Http\Controllers;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\DonHang;
class KhachHangController extends Controller
{
     public function __construct()
     {
        $this->middleware('auth');
     }

     public function getHome()
     {
        $taikhoan = TaiKhoan::where('id',Auth::user()->id)->first();
        return view('khachhang.index',compact('taikhoan'));
     }
       public function getThongTin_Sua($id)
     {
        $taikhoan = TaiKhoan::find($id);
        return view('khachhang.thongtin_sua', compact('taikhoan'));
     }
       public function postThongTin_Sua(Request $request , $id)
     {
        $request->validate([
        'name' => ['required', 'string', 'max:100'],
        'username' => ['required', 'max:255', 'unique:taikhoan,username,'.$id],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:taikhoan,email,'.$id],
        'password' => [ 'confirmed'],
        ]);

        $orm = TaiKhoan::find($id);
        $orm->name = $request->name;
        $orm->username = $request->username;
        $orm->email = $request->email;
        if(!empty($request->password)) $orm->password = Hash::make($request->password);
        $orm->role = 'user';
        $orm->save();

        return redirect()->route('khachhang.home');
     }
     public function getDonHang($id)
     {
      $donhang = DonHang::where('taikhoan_id',$id)->orderby('created_at','desc')->get();
      return view('khachhang.donhang',compact('donhang'));
     }
     public function getDonHang_Huy($id)
     {
         $donhang = DonHang::find($id);
         if($donhang->tinhtrang_id < 4)
         {
            $donhang->tinhtrang_id = 4;
            $donhang->save();
            return redirect()->route('khachhang.home');
         }
         else
         {
             return redirect()->route('khachhang.home')->with('status','Đơn hàng trong tình trạng <strong>'.$donhang->tinhtrang->tinhtrang.'</strong> nên không thể hủy <strong>');
         }
       
        
         
     }
     
}