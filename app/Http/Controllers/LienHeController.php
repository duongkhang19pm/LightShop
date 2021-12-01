<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LienHe;
use Str;
class LienHeController extends Controller
{
     public function getDanhSach()
    {
        $lienhe = LienHe::all();
        return view('admin.lienhe.danhsach',compact('lienhe'));
    }
    public function getThem()
    {
        return view('admin.lienhe.them');
    }
    public function postThem(Request $request)
    {
        //kiểm tra 

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
         //quay về danh sách
        return redirect()->route('admin.lienhe');


       
    }
    public function getSua($id)
    {
        $lienhe = LienHe::find($id);
        return view('admin.lienhe.sua',compact('lienhe'));
    }
    public function postSua(Request $request , $id)
    {
        //kiểm tra 

        $this->validate($request, [
            'hovaten' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'max:191'],
            'sodienthoai' => ['required', 'string', 'max:12', 'min:10'],
            'noidung' => ['required']
        ]);
        // sửa
        $orm = LienHe::find($id);
        $orm->hovaten = $request->hovaten;
        $orm->email = $request->email;
        $orm->sodienthoai = $request->sodienthoai;
        $orm->noidung = $request->noidung;
        $orm->save();
        //quay về danh sách
        return redirect()->route('admin.lienhe');
    }
    public function getXoa($id)
    {
            
         $orm = LienHe::find($id);
         $orm->delete();
        return redirect()->route('admin.lienhe');
    }
}
