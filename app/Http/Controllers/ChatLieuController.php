<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ChatLieu;
use Str;
class ChatLieuController extends Controller
{
      public function getDanhSach()
    {
        $chatlieu = ChatLieu::all();
        return view('admin.chatlieu.danhsach',compact('chatlieu'));
    }
    public function getThem()
    {
        return view('admin.chatlieu.them');
    }
    public function postThem(Request $request)
    {
        //kiểm tra 

        $this->validate($request, [
            'tenchatlieu' => ['required', 'string', 'max:191','unique:chatlieu']
        ]);

        //thêm
        $orm = new ChatLieu();
        $orm->tenchatlieu = $request->tenchatlieu;
        $orm->tenchatlieu_slug = Str::slug($request->tenchatlieu,'-');
        $orm->save();

         //quay về danh sách
        return redirect()->route('admin.chatlieu');


       
    }
    public function getSua($id)
    {
        $chatlieu = ChatLieu::find($id);
        return view('admin.chatlieu.sua',compact('chatlieu'));
    }
    public function postSua(Request $request , $id)
    {
        //kiểm tra 

        $this->validate($request, [
            'tenchatlieu' => ['required', 'string', 'max:191','unique:chatlieu,tenchatlieu,'.$request->id]
        ]);
        // sửa
        $orm = ChatLieu::find($id);
        $orm->tenchatlieu = $request->tenchatlieu;
        $orm->tenchatlieu_slug = Str::slug($request->tenchatlieu,'-');
        $orm->save();
        //quay về danh sách
        return redirect()->route('admin.chatlieu');
    }
    public function getXoa($id)
    {
            
         $orm = ChatLieu::find($id);
         $orm->delete();
        return redirect()->route('admin.chatlieu');
    }}
