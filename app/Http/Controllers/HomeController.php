<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\ThuongHieu;
use App\Models\BaiViet;
use App\Models\HinhAnh;
use App\Models\DonHang;
use App\Models\DonHang_ChiTiet;
use App\Models\ChuDe;
use App\Models\NhomSanPham;
use App\Models\LoaiSanPham;
use App\Models\LienHe;
use App\Mail\DatHangEmail;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Mail;
use Str;
use Storage;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    
    

    public function __construct()
    {
        
    }
    public function getGoogleLogin()
     {
        return Socialite::driver('google')->redirect();
     }

     public function getGoogleCallback()
     {
         try
         {
             $user = Socialite::driver('google')
             ->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
             ->stateless()
             ->user();
         }
         catch(Exception $e)
         {
            return redirect()->route('frontend.dangnhap')->with('warning', 'Lỗi xác thực. Xin vui lòng thử lại!');
         }

         $existingUser = TaiKhoan::where('email', $user->email)->first();
         if($existingUser)
         {
             // Nếu người dùng đã tồn tại thì đăng nhập
             Auth::login($existingUser, true);
             return redirect()->route('frontend');
         }
         else
         {
             // Nếu chưa tồn tại người dùng thì thêm mới
                 $newUser = TaiKhoan::create([
                 'name' => $user->name,
                 'username' => Str::before($user->email, '@'),
                 'email' => $user->email,
                 'password' => Hash::make('lightstore@2021'), // Gán mật khẩu tự do
            ]);

             // Sau đó đăng nhập
             Auth::login($newUser, true);
             return redirect()->route('frontend');
         }
     }

    public function getHome()
    {
        $thuonghieu = ThuongHieu::all();
        $sanpham = SanPham::Where('hienthi',1)->orderby('created_at','desc')->paginate(8);
        $baiviet = BaiViet::Where('kiemduyet',1)->orderby('created_at','desc')->paginate(4);
        return view('frontend.index', compact('sanpham','baiviet'));
    }

      public function getTimKiem(Request $request)
    {
       
        $key = $request->get('key');
        $ketqua = SanPham::where('tensanpham','like','%'.$key.'%')->get();
        $baiviet = BaiViet::Where('kiemduyet',1)->orderby('created_at','desc')->paginate(4);
        return view('frontend.timkiem', compact('key','baiviet','ketqua'));
        //return view('frontend.timkiem', array('key' => $key ,'ketqua' => $ketqua ,'baiviet'=>$baiviet));
      
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
         $sanpham = SanPham::find($row->id);
         if($row->qty < $sanpham->soluong )
         {

            if($row->qty < 10)

            {
                Cart::update($row_id, $row->qty + 1);
                return redirect()->route('frontend.giohang');
            }
            else
             {
                return redirect()->route('frontend.giohang')->with('status','Sản Phẩm <strong>'.$sanpham->tensanpham.'</strong> chỉ được mua 1 lần / 10 sản phẩm');
             }
            
         }
         else
         {
            return redirect()->route('frontend.giohang')->with('status','Sản Phẩm <strong>'.$sanpham->tensanpham.'</strong> chỉ còn <strong>'.$sanpham->soluong.'</strong> sản phẩm không đủ số lượng');
         }
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
             return redirect()->route('frontend.dangnhap');
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
            $sp = SanPham::find($value->id);
            $sp->soluong -=  $value->qty;
            $sp->save();
        }

        Mail::to(Auth::user()->email)->send(new DatHangEmail($dh));
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

     public function getSanPham()
     {

        $nhomsanpham = NhomSanPham::all();
        $sanpham = SanPham::orderby('created_at','desc')->paginate(20);
        $baiviet = BaiViet::Where('kiemduyet',1)->orderby('created_at','desc')->paginate(3);
        return view('frontend.SanPham',compact('sanpham','nhomsanpham','baiviet'));
         
     }
     public function getSanPham_ChiTiet($tensanpham_slug)
     {
       
       $sanpham = SanPham::where('tensanpham_slug', $tensanpham_slug)->first();
         return view('frontend.sanpham_chitiet',compact('sanpham'));
         
     }
    public function getSanPham_Nhom($tennhom_slug)
     {
        $loaisanpham = LoaiSanPham::all();
        $nhomsanpham = NhomSanPham::where('tennhom_slug', $tennhom_slug)->first();
        $sanpham = SanPham::where('nhomsanpham_id', $nhomsanpham->id)->orderby('created_at','desc')->paginate(20);
        $baiviet = BaiViet::Where('kiemduyet',1)->orderby('created_at','desc')->paginate(3);
         return view('frontend.sanpham_nhom',compact('sanpham','loaisanpham','nhomsanpham','baiviet'));
         
     }
     public function getSanPham_Loai($tennhom_slug,$tenloai_slug)
     {
        $baiviet = BaiViet::Where('kiemduyet',1)->orderby('created_at','desc')->paginate(3);
       
         $loaisanpham = LoaiSanPham::where('tenloai_slug', $tenloai_slug)->first();
         
            $sanpham = SanPham::where('loaisanpham_id', $loaisanpham->id)->orderby('created_at','desc')->paginate(20);
            
            return view('frontend.sanpham_loai',compact('sanpham','loaisanpham','baiviet'));
         
        
         
     }


      public function getBaiViet()
     {
        $baiviet = BaiViet::orderby('created_at','desc')->paginate(10);
         return view('frontend.baiviet',compact('baiviet'));
     }
       public function getBaiViet_ChiTiet($tenchude_slug,$tieude_slug)
     {
        $chude = ChuDe::all();
        $baiviet1 = BaiViet::Where('kiemduyet',1)->orderby('created_at','desc')->paginate(3);
        $baiviet2 = BaiViet::where('tieude_slug', $tieude_slug)->first();
        $baiviet = 'baiviet' . $tieude_slug;
        if (!Session::has($baiviet)) {
            BaiViet::where('tieude_slug', $tieude_slug)->increment('luotxem');
            Session::put($baiviet, 1);
        }
         return view('frontend.baiviet_chitiet',compact('baiviet','baiviet1','baiviet2','chude'));
     }
     
      public function getBaiViet_ChuDe($tenchude_slug)
     {
        $chude = ChuDe::where('tenchude_slug', $tenchude_slug)->first();
        $baiviet = BaiViet::where('chude_id', $chude->id)->orderby('created_at','desc')->paginate(4);
         return view('frontend.baiviet_chude',compact('baiviet'));
         
     }
     public function getDangNhap()
    {
        return view('frontend.dangnhap');
    }
    public function getDangKy()
    {
        return view('frontend.dangky');
    }
     public function getLienHe()
    {
        return view('frontend.lienhe');
    }
    public function postLienHe(Request $request)
    {
         $this->validate($request, [
            'hovaten' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'max:191'],
            'sodienthoai' => ['required', 'string', 'max:12', 'min:10'],
            'noidung' => ['required']
        ]);
        //thêm
        $orm = new LienHe();
        $orm->hovaten = $request->hovaten;
        $orm->email = $request->email;
        $orm->sodienthoai = $request->sodienthoai;
        $orm->noidung = $request->noidung;
        $orm->save();
        return redirect()->route('frontend');
    }
     public function getGioiThieu()
    {
        return view('frontend.gioithieu');
    }



    

}