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
        LoaiSanPham::create(['nhomsanpham_id' => '1','tenloai' => 'Đèn Chùm Serip','tenloai_slug' => 'den-chum-serip']);
        LoaiSanPham::create(['nhomsanpham_id' => '1','tenloai' => 'Đèn Chùm Cổ Điển','tenloai_slug' => 'den-chum-co-dien']);
        LoaiSanPham::create(['nhomsanpham_id' => '1','tenloai' => 'Đèn Chùm Nến','tenloai_slug' => 'den-chum-nen']);
        LoaiSanPham::create(['nhomsanpham_id' => '2','tenloai' => 'Đèn Mâm Pha Lê Cao Cấp','tenloai_slug' => 'den-mam-pha-le-cao-cap']);
        LoaiSanPham::create(['nhomsanpham_id' => '2','tenloai' => 'Đèn Mâm Hiện Đại','tenloai_slug' => 'den-mam-hien-dai']);
        LoaiSanPham::create(['nhomsanpham_id' => '2','tenloai' => 'Đèn Mâm Pha Lê Thiết Kế','tenloai_slug' => 'den-mam-pha-le-thiet-ke']);
        LoaiSanPham::create(['nhomsanpham_id' => '2','tenloai' => 'Đèn Mâm Led Vuông','tenloai_slug' => 'den-mam-led-vuong']);
        LoaiSanPham::create(['nhomsanpham_id' => '2','tenloai' => 'Đèn Mâm Led Tròn','tenloai_slug' => 'den-mam-led-tron']);
        LoaiSanPham::create(['nhomsanpham_id' => '2','tenloai' => 'Đèn Mâm Cho Phòng Khách','tenloai_slug' => 'den-mam-cho-phong-khach']);
        LoaiSanPham::create(['nhomsanpham_id' => '3','tenloai' => 'Đèn Chùm Hiện Đại','tenloai_slug' => 'den-chum-hien-dai']);
        LoaiSanPham::create(['nhomsanpham_id' => '3','tenloai' => 'Đèn Phòng Khách Hiện Đại','tenloai_slug' => 'den-phong-khach-hien-dai']);
        LoaiSanPham::create(['nhomsanpham_id' => '3','tenloai' => 'Đèn Tường Hiện Đại','tenloai_slug' => 'den-tuong-hien-dai']);
        LoaiSanPham::create(['nhomsanpham_id' => '3','tenloai' => 'Đèn Pha Lê Hiện Đại','tenloai_slug' => 'den-pha-le-hien-dai']);
        LoaiSanPham::create(['nhomsanpham_id' => '4','tenloai' => 'Đèn Bàn Hiện Đại','tenloai_slug' => 'den-ban-hien-dai']);
        LoaiSanPham::create(['nhomsanpham_id' => '4','tenloai' => 'Đèn Bàn Tân Cổ Điển','tenloai_slug' => 'den-ban-tan-co-dien']);
        LoaiSanPham::create(['nhomsanpham_id' => '4','tenloai' => 'Đèn Bàn Pha Lê Cao Cấp','tenloai_slug' => 'den-ban-pha-le-cao-cap']);
        LoaiSanPham::create(['nhomsanpham_id' => '5','tenloai' => 'Đèn Soi Tranh','tenloai_slug' => 'den-soi-tranh']);
        LoaiSanPham::create(['nhomsanpham_id' => '5','tenloai' => 'Đèn Gương','tenloai_slug' => 'den-gương']);
        LoaiSanPham::create(['nhomsanpham_id' => '5','tenloai' => 'Đèn Trụ Cổng','tenloai_slug' => 'den-tru-cong']);
        LoaiSanPham::create(['nhomsanpham_id' => '5','tenloai' => 'Đèn Treo Tường Cổ Điển','tenloai_slug' => 'den-treo-tương-co-dien']);
        LoaiSanPham::create(['nhomsanpham_id' => '5','tenloai' => 'Đèn Treo Tường Hiện Đại','tenloai_slug' => 'den-treo-tuong-hien-dai']);
        LoaiSanPham::create(['nhomsanpham_id' => '6','tenloai' => 'Đèn Thả Hiện Đại','tenloai_slug' => 'den-tha-hien-dai']);
        LoaiSanPham::create(['nhomsanpham_id' => '6','tenloai' => 'Đèn Thả Cổ Điển','tenloai_slug' => 'den-tha-co-dien']);




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
