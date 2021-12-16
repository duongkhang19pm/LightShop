<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\XuatXu;
class CreateXuatXusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuatxu', function (Blueprint $table) {
            $table->id();
            $table->string('tenxuatxu');
            $table->string('tenxuatxu_slug');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
        });
        XuatXu::create(['tenxuatxu' => 'Hoa Kỳ','tenxuatxu_slug' => 'hoa-ky']);
        XuatXu::create(['tenxuatxu' => 'Anh','tenxuatxu_slug' => 'anh']);
        XuatXu::create(['tenxuatxu' => 'Pháp','tenxuatxu_slug' => 'phap']);
        XuatXu::create(['tenxuatxu' => 'Trung Quốc','tenxuatxu_slug' => 'trung-quoc']);
        XuatXu::create(['tenxuatxu' => 'Việt Nam','tenxuatxu_slug' => 'viet-nam']);
        XuatXu::create(['tenxuatxu' => 'Thái Lan','tenxuatxu_slug' => 'thai-lan']);
        XuatXu::create(['tenxuatxu' => 'Nga','tenxuatxu_slug' => 'nga']);
        XuatXu::create(['tenxuatxu' => 'Đức','tenxuatxu_slug' => 'duc']);
        XuatXu::create(['tenxuatxu' => 'Ý','tenxuatxu_slug' => 'y']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xuatxu');
    }
}
