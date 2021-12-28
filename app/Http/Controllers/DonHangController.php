<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TinhTrang;
use App\Models\DonHang;
use App\Models\DonHang_ChiTiet;
class DonHangController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getDanhSach()
    {
        
        $donhang = DonHang::orderBy('created_at', 'desc')->get();
        $tinhtrang = TinhTrang::all();
        return view('admin.donhang.danhsach', compact('donhang','tinhtrang'));
    }
    public function getDoanhThu()
    {
        return view('admin.doanhthu');
    }
    public function getJSON ()
    {
        
    }
    public function getTinhTrang($id,$tinhtrang_id)
    {
        
        $orm = DonHang::find($id);
        $tinhtrang = TinhTrang::find($tinhtrang_id);
        if($tinhtrang_id == 110)
        {
            $orm->tinhtrang_id =  $tinhtrang_id / 10 - 1;
            $orm->save();
            return redirect()->route('admin.donhang');
        }
        else
        {
            
            $orm->tinhtrang_id =  $tinhtrang_id - 10;
            $orm->save();
            return redirect()->route('admin.donhang');
        }
       
    }
    public function getThem()
    {
        // Đặt hàng bên Front-end
    }
    
    public function postThem(Request $request)
    {
        // Xử lý đặt hàng bên Front-end
    }
    
    public function getSua($id)
    {
        $donhang = DonHang::find($id);
        if($donhang->tinhtrang_id <= 4)
        {
            $tinhtrang = TinhTrang::all();
             return view('admin.donhang.sua', compact('donhang', 'tinhtrang'));
        }
        else
        {
            return redirect()->route('admin.donhang')->with('status','Tình trạng đơn hàng không thê cập nhật');
        }
        
    }
    
    public function postSua(Request $request, $id)
    {
        $this->validate($request, [
            'tinhtrang_id' => ['required'],
            'dienthoaigiaohang' => ['required', 'string', 'max:20'],
            'diachigiaohang' => ['required', 'string', 'max:191'],
        ]);
        
        $orm = DonHang::find($id);
        $orm->tinhtrang_id = $request->tinhtrang_id;
        $orm->dienthoaigiaohang = $request->dienthoaigiaohang;
        $orm->diachigiaohang = $request->diachigiaohang;
        $orm->save();
        
        return redirect()->route('admin.donhang');
    }
    
    public function getXoa($id)
    {
        $donhang = DonHang::find($id);
        if($donhang->tinhtrang_id == 1)
        {
            $chitiet = DonHang_ChiTiet::where('donhang_id', $donhang->id)->delete();
           
            $donhang->delete();
            return redirect()->route('admin.donhang');
        }
        else
        {
             return redirect()->route('admin.donhang')->with('status','Đơn Hàng Không Thể Xóa!');
        }
        
      
    }


      public function getDanhSach_NhanVien()
    {
        
        $donhang = DonHang::orderBy('created_at', 'desc')->get();
        $tinhtrang = TinhTrang::all();
        return view('nhanvien.donhang.danhsach', compact('donhang','tinhtrang'));
    }
    public function getTinhTrang_NhanVien($id,$tinhtrang_id)
    {
        
        $orm = DonHang::find($id);
        $tinhtrang = TinhTrang::find($tinhtrang_id);
        if($tinhtrang_id == 110)
        {
            $orm->tinhtrang_id =  $tinhtrang_id / 10 - 1;
            $orm->save();
            return redirect()->route('nhanvien.donhang');
        }
        else
        {
            $orm->tinhtrang_id =  $tinhtrang_id - 10;
            $orm->save();
            return redirect()->route('nhanvien.donhang');
        }
       
    }
     public function getSua_NhanVien($id)
    {
        $donhang = DonHang::find($id);
        if($donhang->tinhtrang_id <= 4)
        {
            $tinhtrang = TinhTrang::all();
             return view('nhanvien.donhang.sua', compact('donhang', 'tinhtrang'));
        }
        else
        {
            return redirect()->route('nhanvien.donhang')->with('status','Tình trạng đơn hàng không thê cập nhật');
        }
        
    }
     public function postSua_NhanVien(Request $request, $id)
    {
        $this->validate($request, [
            'tinhtrang_id' => ['required'],
            'dienthoaigiaohang' => ['required', 'string', 'max:20'],
            'diachigiaohang' => ['required', 'string', 'max:191'],
        ]);
        
        $orm = DonHang::find($id);
        $orm->tinhtrang_id = $request->tinhtrang_id;
        $orm->dienthoaigiaohang = $request->dienthoaigiaohang;
        $orm->diachigiaohang = $request->diachigiaohang;
        $orm->save();
        
        return redirect()->route('nhanvien.donhang');
    }
    
}