<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThuongHieu;
use Str;
use Storage;

class ThuongHieuController extends Controller
{
    public function getDanhSach()
    {
        $thuonghieu = ThuongHieu::all();
        return view('admin.thuonghieu.danhsach',compact('thuonghieu'));
    }
    public function getThem()
    {
        return view('admin.thuonghieu.them');
    }
    public function postThem(Request $request)
    {
        //kiểm tra 

        $this->validate($request, [
            'tenthuonghieu' => ['required', 'string', 'max:191','unique:thuonghieu'],
            'hinhanh' => ['nullable', 'image', 'max:2048']
        ]);
        //upload file hinh
        if ($request->hasFile('hinhanh'))
        {
            $extension=$request->file('hinhanh')->extension();
            $filename=Str::slug($request->tenthuonghieu,'-').'.'.$extension;
            $path=Storage::putFileAs('thuonghieu',$request->file('hinhanh'),$filename);

        }
        //thêm
        $orm = new ThuongHieu();
        $orm->tenthuonghieu = $request->tenthuonghieu;
        $orm->tenthuonghieu_slug = Str::slug($request->tenthuonghieu,'-');
        if($request->hasFile('hinhanh'))$orm->hinhanh=$path;
        $orm->save();

         //quay về danh sách
        return redirect()->route('admin.thuonghieu');


       
    }
    public function getSua($id)
    {
        $thuonghieu = ThuongHieu::find($id);
        return view('admin.thuonghieu.sua',compact('thuonghieu'));

    }
    public function postSua(Request $request , $id)
    {
        //kiểm tra 

        $this->validate($request, [
            'tenthuonghieu' => ['required', 'string', 'max:191','unique:thuonghieu,tenthuonghieu,'.$id],
            'hinhanh' => ['nullable', 'image', 'max:2048']
        ]);
        if ($request->hasFile('hinhanh'))
        {
            $orm=ThuongHieu::find($id);
            Storage::delete($orm->hinhanh);
            $extension=$request->file('hinhanh')->extension();
            $filename=Str::slug($request->tenthuonghieu,'-').'.'.$extension;
            $path=Storage::putFileAs('thuonghieu',$request->file('hinhanh'),$filename);

        }
        // sửa
        $orm =ThuongHieu::find($id);
        $orm->tenthuonghieu = $request->tenthuonghieu;
        $orm->tenthuonghieu_slug = Str::slug($request->tenthuonghieu,'-');
        if($request->hasFile('hinhanh'))$orm->hinhanh=$path;
        $orm->save();
        //quay về danh sách
        return redirect()->route('admin.thuonghieu');
    }
    public function getXoa($id)
    {
            
         $orm = ThuongHieu::find($id);
         $orm->delete();
         Storage::delete($orm->hinhanh);
        return redirect()->route('admin.thuonghieu');
    }
}