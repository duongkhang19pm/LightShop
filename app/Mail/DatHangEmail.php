<?php
namespace App\Mail;
use App\Models\DonHang;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class DatHangEmail extends Mailable
{
     use Queueable, SerializesModels;

     public $dh;

     public function __construct(DonHang $dh)
     {
        $this->dh = $dh;
     }

     public function build()
     {
        return $this->view('emails.dathang')->subject('Đặt hàng thành công tại ' . config('app.name', 'Laravel'));
     }
}