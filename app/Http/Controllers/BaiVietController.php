<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiViet;
use App\Models\TaiKhoan;
use App\Models\ChuDe;
use Carbon\Carbon;
use Str;
use Illuminate\Support\Facades\Auth;
class BaiVietController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getDanhSach()
    {
        $baiviet = BaiViet::all();
        
        return view('admin.baiviet.danhsach', compact('baiviet'));
    }
    public function getThem()
    {
        $chude = ChuDe::all();
       
        return view('admin.baiviet.them',compact('chude'));    
    }

    public function postThem(Request $request)
    {
        $this->validate($request,[
        'chude_id' => ['required'],
        'tieude'=>['required','string','max:191','unique:baiviet'],
        'tomtat' => ['nullable','string'],
        'noidung' => ['required','string'],
        ]);

        $orm = new BaiViet();
        $orm->chude_id = $request->chude_id;
        $orm->taikhoan_id = Auth::user()->id;
        $orm->tieude = $request->tieude;
        $orm->tieude_slug = Str::slug($request->tieude, '-');
        $orm->tomtat = $request->tomtat;
        $orm->noidung = $request->noidung;
        
        $orm->ngaydang = Carbon::now();
        $orm->luotxem = 0;
        $orm->save();
        return redirect()->route('admin.baiviet');
    }

    public function getSua($id)
    {
        $baiviet = BaiViet::find($id);
        $chude = ChuDe::all();
        return view('admin.baiviet.sua',compact('baiviet','chude'));    
    }

    public function postSua(Request $request , $id)
    {
         $request->validate([
        'chude_id' => ['required'],
        'tieude'=>['required','string','max:191','unique:baiviet,tieude,'.$id],
        'tomtat' => ['nullable','string'],
        'noidung' => ['required'],
        ]);

        $orm = BaiViet::find($id);
        $orm->chude_id = $request->chude_id;
        $orm->taikhoan_id = Auth::user()->id;
        $orm->tieude = $request->tieude;
        $orm->tieude_slug = Str::slug($request->tieude, '-');
        $orm->tomtat = $request->tomtat;
        $orm->noidung = $request->noidung;
        
        $orm->ngaydang = Carbon::now();
        $orm->luotxem = 0;
        $orm->save();
        return redirect()->route('admin.baiviet');
    }

    public function getXoa($id)
    {
        $orm = BaiViet::find($id);
        $orm->delete();
        return redirect()->route('admin.baiviet');
    }

     public function getKiemDuyet($id)
    {
        $orm = BaiViet::find($id);
        $orm->kiemduyet= 1 - $orm->kiemduyet;
        $orm->save();
        return redirect()->route('admin.baiviet');
    }

}
