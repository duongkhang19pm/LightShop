<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ChatLieu;
class CreateChatLieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatlieu', function (Blueprint $table) {
            $table->id();
            $table->string('tenchatlieu');
            $table->string('tenchatlieu_slug');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
            $table->engine = 'InnoDB';
        });
            ChatLieu::create(['tenchatlieu' => 'Kim Cương','tenchatlieu_slug' => 'kim-cuong']);
            ChatLieu::create(['tenchatlieu' => 'Pha Lê','tenchatlieu_slug' => 'pha-le']);
            ChatLieu::create(['tenchatlieu' => 'Vàng','tenchatlieu_slug' => 'vang']);
            ChatLieu::create(['tenchatlieu' => 'Bạc','tenchatlieu_slug' => 'bac']);
            ChatLieu::create(['tenchatlieu' => 'Đồng','tenchatlieu_slug' => 'dong']);
            ChatLieu::create(['tenchatlieu' => 'Hợp Kim','tenchatlieu_slug' => 'hop-kim']);
            ChatLieu::create(['tenchatlieu' => 'Mica','tenchatlieu_slug' => 'mica']);
            ChatLieu::create(['tenchatlieu' => 'Gỗ','tenchatlieu_slug' => 'go']);
        }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chatlieu');
    }
}
