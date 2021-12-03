<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\LoaiSanPham;
class CreateLoaiSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaisanpham', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nhomsanpham_id')->constrained('nhomsanpham');
            $table->string('tenloai');
            $table->string('tenloai_slug');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
        });
        LoaiSanPham::create(['nhomsanpham_id' => '1','tenloai' => 'Đèn Chùm Pha Phê','tenloai_slug' => 'den-chum-pha-le']);
         LoaiSanPham::create(['nhomsanpham_id' => '1','tenloai' => 'Đèn Chùm Châu Âu','tenloai_slug' => 'den-chum-chau-au']);
          LoaiSanPham::create(['nhomsanpham_id' => '1','tenloai' => 'Đèn Chùm Đồng','tenloai_slug' => 'den-chum-dong']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaisanpham');
    }
}
