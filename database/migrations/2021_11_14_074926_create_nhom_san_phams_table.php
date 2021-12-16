<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\NhomSanPham;
class CreateNhomSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhomsanpham', function (Blueprint $table) {
            $table->id();
            $table->string('tennhom');
            $table->string('tennhom_slug');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
        });
        NhomSanPham::create(['tennhom' => 'Đèn Chùm','tennhom_slug' => 'den-chum']);
        NhomSanPham::create(['tennhom' => 'Đèn Mâm','tennhom_slug' => 'den-mam']);
        NhomSanPham::create(['tennhom' => 'Đèn Hiện Đại','tennhom_slug' => 'den-hien-dai']);
        NhomSanPham::create(['tennhom' => 'Đèn Bàn','tennhom_slug' => 'den-ban']);
        NhomSanPham::create(['tennhom' => 'Đèn Tường','tennhom_slug' => 'den-tuong']);
        NhomSanPham::create(['tennhom' => 'Đèn Thả','tennhom_slug' => 'den-tha']);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhomsanpham');
    }
}
