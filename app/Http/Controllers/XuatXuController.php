<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\XuatXu;
use Str;
class XuatXuController extends Controller
{
    public function getDanhSach()
    {
        $xuatxu = XuatXu::all();
        return view('admin.xuatxu.danhsach',compact('xuatxu'));
    }
    public function getThem()
    {
        return view('admin.xuatxu.them');
    }
    public function postThem(Request $request)
    {
        //kiểm tra 

        $this->validate($request, [
            'tenxuatxu' => ['required', 'string', 'max:191','unique:xuatxu']
        ]);

        //thêm
        $orm = new XuatXu();
        $orm->tenxuatxu = $request->tenxuatxu;
        $orm->tenxuatxu_slug = Str::slug($request->tenxuatxu,'-');
        $orm->save();

         //quay về danh sách
        return redirect()->route('admin.xuatxu');


       
    }
    public function getSua($id)
    {
        $xuatxu = XuatXu::find($id);
        return view('admin.xuatxu.sua',compact('xuatxu'));
    }
    public function postSua(Request $request , $id)
    {
        //kiểm tra 

        $this->validate($request, [
            'tenxuatxu' => ['required', 'string', 'max:191','unique:xuatxu,tenxuatxu,'.$request->id]
        ]);
        // sửa
        $orm = XuatXu::find($id);
        $orm->tenxuatxu = $request->tenxuatxu;
        $orm->tenxuatxu_slug = Str::slug($request->tenxuatxu,'-');
        $orm->save();
        //quay về danh sách
        return redirect()->route('admin.xuatxu');
    }
    public function getXoa($id)
    {
            
         $orm = XuatXu::find($id);
         $orm->delete();
        return redirect()->route('admin.xuatxu');
    }
}
