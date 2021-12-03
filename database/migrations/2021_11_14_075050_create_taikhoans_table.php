<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TaiKhoan;
class CreateTaiKhoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('taikhoan', function (Blueprint $table) {
            $table->id();
             $table->string('name');
             $table->string('username', 100)->unique(); // Tên đăng nhập
             $table->string('email')->unique();
             $table->timestamp('email_verified_at')->nullable();
             $table->string('password');
             $table->rememberToken();
             $table->string('role', 20)->default('user'); // Quyền hạn: admin, user
             $table->tinyInteger('kichhoat')->default(0);
             $table->timestamp('created_at')->useCurrent();
             $table->timestamp('updated_at')->useCurrentOnUpdate();
             $table->engine = 'InnoDB';
        });
        TaiKhoan::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$5FjsSCqTOE2lyb7wAWZsUuY6yL4w2yK8vyzqida48gazHabrSiHj.',// mk: 123456789
            'role' => 'admin',
            'kichhoat' => '0',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taikhoan');
    }
}
