<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\ThuongHieu;
use App\Models\BaiViet;
use App\Models\HinhAnh;
use App\Models\DonHang;
use App\Models\DonHang_ChiTiet;
use Str;
use Storage;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
class HomeController extends Controller
{
    
    

    public function __construct()
    {
        
    }
    
    public function getHome()
    {
        $thuonghieu = ThuongHieu::all();
        $sanpham = SanPham::Where('hienthi',1)->paginate(20);
        $baiviet = BaiViet::Where('kiemduyet',1)->paginate(20);
        return view('frontend.index', compact('sanpham','baiviet'));
    }

    
    public function getGioHang()
    {
        if(Cart::count() <= 0)
            return view('frontend.giohang_rong');
        else
        
        
            return view('frontend.giohang');

    }

    public function getGioHang_Them($tensanpham_slug)
    {
        $sanpham = SanPham::where('tensanpham_slug', $tensanpham_slug)->first();
            Cart::add([
                    'id' => $sanpham->id,
                    'name' => $sanpham->tensanpham,
                    'price' => $sanpham->dongia,
                    'qty' => 1,
                    'weight' => 0,
                    'options' => [
                    'image' => $sanpham->hinhanh
                ]
                ]);

        return redirect()->route('frontend.giohang');
    }

    public function getGioHang_Xoa($row_id)
    {
        Cart::remove($row_id);
        return redirect()->route('frontend.giohang');
    }

    public function getGioHang_XoaTatCa()
    {
        Cart::destroy();
        return redirect()->route('frontend.giohang');
    }   

    public function getGioHang_Giam($row_id)
    {
        $row = Cart::get($row_id);
        if($row->qty > 1)
        {
            Cart::update($row_id, $row->qty - 1);
        }
        return redirect()->route('frontend.giohang');
    }

    public function getGioHang_Tang($row_id)
    {
        $row = Cart::get($row_id);
        if($row->qty < 10)
        {
            Cart::update($row_id, $row->qty + 1);
        }
        return redirect()->route('frontend.giohang');
    }



    public function getDatHang()
    {
        //Nếu đã đăng nhập thì thanh toán
        if(Auth::check())
        {
            return view('frontend.dathang');
        }
        else
        {
             return redirect()->route('login');
        }
       
    }

    public function postDatHang(Request $request)
    {
        $this->validate($request, [
            'diachigiaohang' => ['required', 'max:255'],
            'dienthoaigiaohang' => ['required', 'max:255'],
        ]);

        // Lưu vào đơn hàng
        $dh = new DonHang();
        $dh->taikhoan_id = Auth::user()->id;
         $dh->tinhtrang_id = 1; 
        $dh->diachigiaohang = $request->diachigiaohang;
        $dh->dienthoaigiaohang = $request->dienthoaigiaohang;
        $dh->save();

        // Lưu vào đơn hàng chi tiết
        foreach(Cart::content() as $value)
        {
            $ct = new DonHang_ChiTiet();
            $ct->donhang_id = $dh->id;
            $ct->sanpham_id = $value->id;
            $ct->soluongban = $value->qty;
            $ct->dongiaban = $value->total;
            $ct->save();
        }

        return redirect()->route('frontend.dathangthanhcong');
    }

    public function getDatHangThanhCong()
    {
    // Xóa giỏ hàng khi hoàn tất đặt hàng?
        Cart::destroy();

        return view('frontend.dathangthanhcong');
    }

    public function get403()
    {
        return view('errors.403');
    }


     public function getSanPham_ChiTiet($tensanpham_slug)
     {
        $a= $tensanpham_slug;
        // $sanpham = SanPham::where('tensanpham_slug',$tensanpham_slug);

         return view('frontend.sanpham_chitiet',compact('a'));
         
     }
     public function getDangNhap()
    {
        return view('frontend.dangnhap');
    }
    public function getDangKy()
    {
        return view('frontend.dangky');
    }


}