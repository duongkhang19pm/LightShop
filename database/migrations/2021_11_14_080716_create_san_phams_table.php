<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nhomsanpham_id')->constrained('nhomsanpham');
            $table->foreignId('loaisanpham_id')->constrained('loaisanpham');
            $table->foreignId('thuonghieu_id')->constrained('thuonghieu');
            $table->foreignId('xuatxu_id')->constrained('xuatxu');
            $table->foreignId('chatlieu_id')->constrained('chatlieu');
            $table->string('tensanpham');
            $table->string('tensanpham_slug');
            $table->integer('soluong');
            $table->double('dongia');
           // $table->string('hinhanh')->nullable();
            $table->text('motasanpham')->nullable();
            $table->unsignedTinyInteger('hienthi')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
