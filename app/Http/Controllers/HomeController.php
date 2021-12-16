<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\BaiViet;
use Str;
use Storage;
class HomeController extends Controller
{
    
    

    public function __construct()
    {
        
    }
    
    public function getHome()
    {
        $sanpham = SanPham::Where('hienthi',1)->paginate(20);
        $baiviet = BaiViet::Where('kiemduyet',1)->paginate(20);
        $extension = array('jpg','png','jpeg','gif','bmp');
        $bvimage = array();
        $no_image = config('app.url').'/public/images/noimage.png';
        foreach($baiviet as $value)
        {
            $baiviet_1='storage/app/file/'.str_pad($value->id,7,'0',STR_PAD_LEFT).'/';
            if(file_exists($baiviet_1))
            {
                $bvfile = scandir($baiviet_1);
                if (isset($bvfile[3])) {
                    $extension2 = strtolower(pathinfo($bvfile[3],PATHINFO_EXTENSION));
                    if(in_array($extension2,$extension))
                       $bvimage[$value->id] = config('app.url').'/'.$baiviet_1.$bvfile[3];
                       // $bvimage[$value->id] = config('app.url').'/storage/app/file/1.jpg';
                    else
                        $bvimage[$value->id] = $no_image;
                }
                else
                        $bvimage[$value->id] = $no_image;
            }
            else
                        $bvimage[$value->id] = $no_image;

        }
        return view('frontend.index', compact('sanpham','baiviet','bvimage'));
    }
    public function get403()
    {
       
        return view('errors.403');
    }

     

}