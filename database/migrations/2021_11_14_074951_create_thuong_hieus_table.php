<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ThuongHieu;
class CreateThuongHieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuonghieu', function (Blueprint $table) {
            $table->id();
            $table->string('tenthuonghieu');
            $table->string('tenthuonghieu_slug');
            $table->string('hinhanh')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
        });
        ThuongHieu::create(['tenthuonghieu' => 'EGLO','tenthuonghieu_slug' => 'eglo']);
        ThuongHieu::create(['tenthuonghieu' => 'MARINER','tenthuonghieu_slug' => 'mariner']);
        ThuongHieu::create(['tenthuonghieu' => 'IRIS CRISTAL','tenthuonghieu_slug' => 'iris-cristal']);
        ThuongHieu::create(['tenthuonghieu' => 'RIPERLAMP','tenthuonghieu_slug' => 'riperlamp']);
        ThuongHieu::create(['tenthuonghieu' => 'BRONCEART','tenthuonghieu_slug' => 'bronceart']);
        ThuongHieu::create(['tenthuonghieu' => 'BACCARAT','tenthuonghieu_slug' => 'baccarat']);
        ThuongHieu::create(['tenthuonghieu' => 'HERMAN','tenthuonghieu_slug' => 'herman']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thuonghieu');
    }
}
