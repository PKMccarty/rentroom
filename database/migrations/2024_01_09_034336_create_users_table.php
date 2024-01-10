<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->boolean('is_admin')->nullable();
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
                'username' => 'admin',
                'name' => 'Admin',
                'is_admin' => 1,
                'password' => '$2y$12$oPP/4HToe.zUGPwe3dmcFuyFpi.inkw3DE0YQiSiGRYi/0zyIcLl2',
                'email' => 'admin@admin.com',
            // เพิ่มข้อมูลอื่น ๆ ตามลำดับ
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
